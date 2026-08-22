=== Ixian WordPress Theme ===
Contributors: Rhand
Tags: full-site-editing, custom-colors, custom-logo, custom-menu, editor-style, featured-images, grid-layout, template-editing, translation-ready, wide-blocks
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 8.0
Stable tag: 1.2.0
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Ixian is a lean full-site-editing theme for service businesses and SaaS companies. A design
system in `theme.json` plus style variations provide the foundation, and pages are composed from
blocks rather than from a large bundled pattern library — the theme ships a small set of full-page
patterns as starting points, not a catalogue of fragments.

Ixian is forked from Imagewize's [Aviendha](https://github.com/imagewize/aviendha) theme and
inherits its design system, block templates and template parts, re-aimed from e-commerce at
service and SaaS sites. Like Aviendha, it ships no custom blocks of its own — content blocks come
from the shared [Aludra](https://github.com/imagewize/aludra) plugin (mega menu, carousel, FAQ
tabs, and more), per WordPress.org's theme-review rules.

Ixian recommends, but does not require, the Aludra plugin; without it the theme is a plain block
theme that works with core blocks. WooCommerce is required only for the store templates, which
stay dormant when it is not active.

= Key Features =

* Solid Full Site Editing (FSE) design system via `theme.json`
* WooCommerce block templates for single product and product archive
* Style variations (see `styles/`)
* Full-page starter patterns composed from the Aludra block library
* Pairs with the Aludra block library (mega menu, carousel, FAQ tabs, and more)
* Translation-ready

== Installation ==

1. Upload the theme folder to `/wp-content/themes/`, or install via Appearance → Themes → Add New.
2. Activate the theme through the 'Appearance' menu in WordPress.
3. Optionally install and activate the Aludra plugin for mega menu, carousel, and other blocks.
4. Install and activate WooCommerce for store functionality.

== Changelog ==

= 1.2.0 =
* Cta Banner on About, Portfolio and Pricing now uses Aludra's new `light` style (requires Aludra 2.34.0+) in place of the manual Tertiary/Contrast repalette introduced in 1.1.0 — same look, as a reusable block style instead of a per-pattern override.

= 1.1.0 =
* Hero Banner on About, Portfolio and Pricing now uses the `canvas` style, matching the homepage, instead of the dark default that clashed with the rest of the site.
* About's Stat Rail now uses the `light` style, matching the homepage.
* Cta Banner across About, Portfolio and Pricing is repaletted to a Tertiary band with a Contrast heading and a Primary-filled button, rather than its saturated Primary default.
* Contact page now uses Aludra Contact Section's new `light` style (requires Aludra 2.33.0+), matching the site's light design system.

= 1.0.0 =
* Initial release. Forked from Aviendha 1.15.0 and re-aimed at service businesses and SaaS companies.
* Inherits the `theme.json` design system, block templates, template parts and the `twilight` style variation.
* Renamed throughout: text domain, function prefixes, CSS class hooks, asset slugs and stylesheet handles.
* New logo mark (Font Awesome Free "robot", see Third-Party Libraries below); Aviendha's rose mark removed.
* WooCommerce templates retained, guarded so they stay dormant when WooCommerce is not active.
* Homepage starter pattern composed from the Aludra block library — split hero, trust bar, stat rail,
  capability cards, pricing tiers, client quotes, FAQ accordion and closing call to action.
* Pricing, About, Contact and Portfolio starter patterns, rounding out the full-page pattern set.
* Registers the `ixian` block pattern category so theme patterns are filed under a labelled heading
  in the inserter.
* Footer tagline reworded from "WordPress & WooCommerce" to suit a theme where WooCommerce is
  optional.

== Third-Party Libraries ==

= Font Awesome Free (via Blade Icons) =
* License: CC BY 4.0 (icon artwork)
* License URI: https://creativecommons.org/licenses/by/4.0/
* Source: https://blade-ui-kit.com/blade-icons/fas-robot
* Upstream: https://fontawesome.com/license/free
* Used in: `assets/logos/ixian-robot.svg`
* Purpose: The Font Awesome Free 6.7.2 "robot" icon is used, unmodified except for
  recoloring, as the theme's logo mark. The required attribution notice is retained
  as a comment inside the SVG file.

* Also used in: `parts/footer.html` (inline, as `wp:html` blocks rather than files)
* Additional icons: "wordpress-simple" and "mastodon" (both Font Awesome Free
  Brands, unmodified except for recoloring), labelling the "Made with WordPress"
  credit and a Mastodon mention in the footer — decorative only, neither is a
  link. Inlined directly in the template part's markup rather than as separate
  SVG files under `assets/`, so the upstream attribution comment each ships with
  lives here instead of inside the block markup.

Distributed through the Blade Icons package, which is itself MIT-licensed
(https://github.com/driesvints/blade-icons/blob/main/LICENSE.md). The MIT License
covers the package; the icon artwork remains under CC BY 4.0.

Both the CC BY 4.0 and MIT licenses are GPL-compatible.

= Bricolage Grotesque =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/Bricolage+Grotesque
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/bricolage-grotesque-variable.woff2`
* Purpose: Display font family (headings), self-hosted as a single variable-font file.

= JetBrains Mono =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/JetBrains+Mono
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/jetbrains-mono-variable.woff2`
* Purpose: Mono font family (eyebrows/labels/metrics), self-hosted as a single variable-font file.

The SIL Open Font License is GPL-compatible.

== Copyright ==

Ixian WordPress Theme, (C) 2026 Jasper Frumau
Ixian is distributed under the terms of the GNU GPL v3 (or later).
