<p align="center">
  <img src="assets/logos/ixian-robot.svg" alt="Ixian Logo" width="128">
</p>
<div align="center">
<h1>Ixian</h1>

A lean full-site-editing theme for service businesses and SaaS companies.
</div>

## Description

Ixian is a full-site-editing (FSE) WordPress theme aimed at service businesses and SaaS companies. `theme.json` and style variations provide the design system; pages are composed from blocks rather than from a large bundled pattern library, with a small set of full-page starter patterns included.

**Ixian is forked from [Aviendha](https://github.com/imagewize/aviendha).** It takes Aviendha 1.15.0 as its starting point — the `theme.json` design system, block templates, template parts and the `twilight` style variation all come from there — and re-aims it from e-commerce at service and SaaS sites. Aviendha is treated the way Sage is: a versioned base you clone and own. Fixes made to Aviendha do not flow here automatically.

**Like Aviendha, Ixian uses [Aludra](https://github.com/imagewize/aludra) for its blocks.** Neither theme registers custom blocks of its own — content blocks come from the shared Aludra plugin (mega menu, carousel, FAQ tabs, pricing tiers, feature cards, and more), which is what WordPress.org's theme-review rules ask for. Aludra is shared across Imagewize's themes, so block and icon work done there benefits Aviendha, [Elayne](https://github.com/imagewize/elayne) and Ixian alike. ([Nynaeve](https://github.com/imagewize/nynaeve) is the exception: it registers its own blocks and does not use Aludra.)

Aludra is recommended but not required — without it Ixian is a plain block theme that works with core blocks.

## Requirements

- WordPress 6.6+
- PHP 8.0+
- [Aludra](https://github.com/imagewize/aludra) plugin (recommended, not required)
- WooCommerce (only if you want the store templates)

## Installation

```bash
composer require imagewize/ixian
```

On a Bedrock site this installs to `web/app/themes/ixian` via `installer-paths`. Otherwise, download a release zip and install it under **Appearance → Themes → Add New**.

## Features

- **Design system** — `theme.json` defines the colour palette, typography, spacing and border radii. The colour and spacing slugs match what Aludra's block styles expect (`base`, `contrast`, `secondary`, `main`, `primary`, `accent`, `tertiary`, `border-light`), so Aludra blocks pick up the theme's colours without configuration.
- **Style variations** — see `styles/` (e.g. `twilight.json`) for alternate palettes on top of the same design system.
- **Two page templates** — `page.html` (default) omits `post-title`, since most pages get their title from a block's own heading; `page-with-title.html` (selectable per page under **Page → Template**) adds the conventional title treatment.
- **WooCommerce, dormant by default** — the theme ships store templates (`single-product`, `archive-product`, `product-search-results`, `coming-soon`) plus add-to-cart layouts in `parts/`. All of it is guarded by `class_exists( 'WooCommerce' )`: with the plugin inactive, the store templates and the header's mini cart are filtered out rather than left to render as unsupported blocks. A site that never installs WooCommerce pays nothing for them.
- **No JS build step** — the theme ships no bundled JavaScript.

## Structure

```
ixian/
├── style.css           # Theme header and the CSS theme.json cannot express
├── theme.json          # Design system: colour, typography, spacing, layout
├── functions.php       # Theme setup, 'menu' template part area, WooCommerce guards
├── templates/          # FSE templates (index, single, page, page-with-title,
│                       #   archive, search, 404, plus WooCommerce store templates)
├── parts/              # header.html, header-dark.html, footer.html, add-to-cart layouts
├── styles/             # Style variations
├── assets/
│   ├── logos/          # Logo mark (SVG)
│   ├── fonts/          # Bricolage Grotesque, JetBrains Mono (variable, self-hosted)
│   └── css/            # WooCommerce override stylesheet (enqueued conditionally)
└── languages/          # Translations (text domain: ixian)
```

Planning documents and design mockups live in the private `imagewize.com` repo under `docs/ixian/`, not here.

## Theme Integration for Aludra

Aludra's mega-menu block requires its host theme to register a `menu` template part area. Ixian does this in `functions.php` via the `default_wp_template_part_areas` filter, so mega menu template parts created in the Site Editor appear under **Appearance → Editor → Patterns → Template Parts → Menus**.

## Development

```bash
composer install
composer run lint        # php-parallel-lint syntax check
composer run wpcs:scan   # PHPCS against phpcs.xml
composer run wpcs:fix    # PHPCBF auto-fix
```

## Credits

The logo mark is the Font Awesome Free 6.7.2 "robot" icon (CC BY 4.0), obtained via [Blade Icons](https://blade-ui-kit.com/blade-icons/fas-robot) (MIT). Fonts are Bricolage Grotesque and JetBrains Mono, both SIL OFL 1.1. Full attributions are in `readme.txt` under **Third-Party Libraries**.

## License

GPL v3 or later. See `LICENSE.md`.
