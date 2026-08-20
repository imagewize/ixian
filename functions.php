<?php
/**
 * Ixian functions and definitions
 *
 * @package Ixian
 * @since   0.1.0
 */

namespace Ixian;

/**
 * Set up theme defaults and register various WordPress features.
 */
function ixian_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'ixian', get_template_directory() . '/languages' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove core block patterns; pages are composed from Ixian's own patterns
	// and the aludra/* block library.
	remove_theme_support( 'core-block-patterns' );

	// WooCommerce.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\ixian_setup' );

/**
 * Register the 'ixian' block pattern category.
 *
 * Theme patterns in `patterns/` declare `Categories: ixian`; without this the
 * inserter files them under an unlabelled category.
 */
function ixian_register_pattern_categories() {
	register_block_pattern_category(
		'ixian',
		array(
			'label'       => __( 'Ixian', 'ixian' ),
			'description' => __( 'Full page layouts composed from the Aludra block library.', 'ixian' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\ixian_register_pattern_categories' );

/**
 * Register the 'menu' template part area, required by the Aludra mega-menu block.
 *
 * @param array $areas Existing template part areas.
 * @return array Modified template part areas.
 */
function ixian_template_part_areas( $areas ) {
	$areas[] = array(
		'area'        => 'menu',
		'area_tag'    => 'nav',
		'label'       => __( 'Menu', 'ixian' ),
		'description' => __( 'Template parts for navigation and mega menu content.', 'ixian' ),
		'icon'        => 'navigation',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\ixian_template_part_areas' );

/**
 * Enqueue theme styles.
 */
function ixian_enqueue_styles() {
	wp_enqueue_style(
		'ixian-style',
		get_template_directory_uri() . '/style.css',
		array(),
		(string) filemtime( get_template_directory() . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\ixian_enqueue_styles' );

/**
 * Enqueue WooCommerce-specific styles, if present.
 */
function ixian_enqueue_woocommerce_styles() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	if ( file_exists( get_template_directory() . '/assets/css/woocommerce.css' ) ) {
		wp_enqueue_style(
			'ixian-woocommerce-style',
			get_template_directory_uri() . '/assets/css/woocommerce.css',
			array( 'ixian-style' ),
			(string) filemtime( get_template_directory() . '/assets/css/woocommerce.css' )
		);
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\ixian_enqueue_woocommerce_styles' );

/**
 * WooCommerce block templates shipped by this theme.
 *
 * @return string[] Template slugs.
 */
function ixian_woocommerce_template_slugs() {
	return array( 'archive-product', 'single-product', 'product-search-results', 'coming-soon', 'order-confirmation' );
}

/**
 * WooCommerce block template parts shipped by this theme.
 *
 * These override WooCommerce's own per-product-type add-to-cart layouts, which
 * the `woocommerce/add-to-cart-with-options` block renders.
 *
 * @return string[] Template part slugs.
 */
function ixian_woocommerce_template_part_slugs() {
	return array(
		'simple-product-add-to-cart-with-options',
		'variable-product-add-to-cart-with-options',
	);
}

/**
 * Register the WooCommerce integration hooks that apply to this site.
 *
 * The theme ships store templates but does not require WooCommerce, so which
 * hooks are needed depends on whether the plugin is active.
 */
function ixian_woocommerce_hooks() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_action( 'init', __NAMESPACE__ . '\ixian_unregister_woocommerce_patterns', 999 );
		add_filter( 'woocommerce_admin_features', __NAMESPACE__ . '\ixian_disable_pattern_toolkit' );

		return;
	}

	add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\ixian_add_to_cart_template_part_area' );
	add_filter( 'get_block_templates', __NAMESPACE__ . '\ixian_filter_woocommerce_templates', 10, 3 );
	add_filter( 'get_block_file_template', __NAMESPACE__ . '\ixian_filter_woocommerce_file_template', 10, 3 );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\ixian_woocommerce_hooks' );

/**
 * Hide the store templates, and the store blocks inside template parts, when
 * WooCommerce is not active.
 *
 * Without this, `single-product` and `archive-product` are listed in the Site
 * Editor on a site that cannot render them, and the header's mini cart shows an
 * unsupported-block placeholder.
 *
 * @param \WP_Block_Template[] $query_result  Templates found for the query.
 * @param array                $query         Query arguments.
 * @param string               $template_type 'wp_template' or 'wp_template_part'.
 * @return \WP_Block_Template[] Filtered templates.
 */
function ixian_filter_woocommerce_templates( $query_result, $query, $template_type ) {
	if ( 'wp_template_part' === $template_type ) {
		foreach ( $query_result as $template ) {
			$template->content = ixian_strip_woocommerce_blocks( $template->content );
		}

		$store_slugs = ixian_woocommerce_template_part_slugs();
	} else {
		$store_slugs = ixian_woocommerce_template_slugs();
	}

	return array_values(
		array_filter(
			$query_result,
			static function ( $template ) use ( $store_slugs ) {
				return ! in_array( $template->slug, $store_slugs, true );
			}
		)
	);
}

/**
 * Strip store blocks from a file-based template part when WooCommerce is not active.
 *
 * Covers the front end, which resolves template parts through this filter rather
 * than through `get_block_templates`.
 *
 * @param \WP_Block_Template|null $block_template Template returned for the file.
 * @param string                  $id             Template identifier.
 * @param string                  $template_type  'wp_template' or 'wp_template_part'.
 * @return \WP_Block_Template|null Filtered template.
 */
function ixian_filter_woocommerce_file_template( $block_template, $id, $template_type ) {
	if ( 'wp_template_part' !== $template_type || ! $block_template instanceof \WP_Block_Template ) {
		return $block_template;
	}

	$block_template->content = ixian_strip_woocommerce_blocks( $block_template->content );

	return $block_template;
}

/**
 * Remove store blocks from template part markup.
 *
 * Block markup in a file cannot be made conditional, so the blocks the theme
 * places in `parts/` are removed from the part's content instead.
 *
 * @param string $content Template part markup.
 * @return string Markup without store blocks.
 */
function ixian_strip_woocommerce_blocks( $content ) {
	if ( ! is_string( $content ) || '' === $content ) {
		return $content;
	}

	return (string) preg_replace(
		'#<!--\s+wp:woocommerce/(?:mini-cart|customer-account)\b.*?/-->\s*#s',
		'',
		$content
	);
}

/**
 * Register the 'add-to-cart-with-options' template part area.
 *
 * WooCommerce registers this area itself; the theme only stands in when the
 * plugin is inactive, so that its add-to-cart parts do not resolve to an
 * unknown area while they are being filtered out.
 *
 * @param array $areas Existing template part areas.
 * @return array Modified template part areas.
 */
function ixian_add_to_cart_template_part_area( $areas ) {
	$areas[] = array(
		'area'        => 'add-to-cart-with-options',
		'area_tag'    => 'div',
		'label'       => __( 'Add to Cart + Options', 'ixian' ),
		'description' => __( 'Add to cart layouts for each product type.', 'ixian' ),
		'icon'        => 'cart',
	);

	return $areas;
}

/**
 * Unregister WooCommerce's bundled block patterns.
 *
 * Ixian removes core's patterns and ships only its own; WooCommerce registers
 * a set on top, which this theme neither designed nor styles. The
 * `woocommerce/*` patterns are left alone — the coming soon templates render
 * them.
 */
function ixian_unregister_woocommerce_patterns() {
	$registry = \WP_Block_Patterns_Registry::get_instance();

	foreach ( $registry->get_all_registered() as $pattern ) {
		if ( isset( $pattern['name'] ) && 0 === strpos( $pattern['name'], 'woocommerce-blocks/' ) ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}

/**
 * Disable WooCommerce's full-composability pattern toolkit.
 *
 * Its onboarding flow offers to assemble pages from patterns and overwrite the
 * theme's templates, neither of which applies to Ixian's own page patterns.
 *
 * @param array $features Enabled WooCommerce admin features.
 * @return array Features without the pattern toolkit.
 */
function ixian_disable_pattern_toolkit( $features ) {
	$key = array_search( 'pattern-toolkit-full-composability', $features, true );

	if ( false !== $key ) {
		unset( $features[ $key ] );
	}

	return array_values( $features );
}
