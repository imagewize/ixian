# Changelog

All notable changes to Ixian are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2026-08-22

### Changed
- Homepage was the only starter pattern that opted into each Aludra block's light
  style variant, so About, Portfolio and Pricing opened on a dark Hero Banner and
  closed on a saturated Cta Banner that clashed with the rest of the light,
  restrained design system. Hero Banner now uses the `canvas` style (matching the
  homepage) on all three, About's Stat Rail now uses the `light` style, and Cta
  Banner is repaletted to a Tertiary band with a Contrast heading and a
  Primary-filled button, rather than its saturated Primary default.
- Contact page now uses Aludra Contact Section's new `light` style (requires
  Aludra 2.33.0+), for the same reason — the block's dark default was the one
  remaining page that didn't fit the site's light design system.

## [1.0.0] - 2026-08-18

Initial release. Ixian is forked from [Aviendha](https://github.com/imagewize/aviendha)
1.15.0 and re-aimed at service businesses and SaaS companies. It inherits Aviendha's
`theme.json` design system, block templates and template parts; the palette, branding
and page composition diverge from here.

### Added
- Full-site-editing design system in `theme.json` — 15-colour palette, 3 gradients,
  9 font sizes, 6 spacing steps, 4 border radii.
- Block templates for pages, posts, archives, search and 404, plus header, dark header
  and footer template parts.
- `twilight` dark style variation.
- WooCommerce block templates, guarded so they are hidden and unloaded when
  WooCommerce is not active.
- **Homepage pattern** (`patterns/page-homepage.php`) — a full page composed from the
  Aludra block library: split hero, trust bar, stat rail, capability cards, pricing
  tiers, client quotes, FAQ accordion and a closing call to action. Ixian-flavoured
  copy and layout live here rather than in shared Aludra, for the same reason the
  palette lives here rather than in shared Aviendha.
- **`ixian` block pattern category**, registered on `init`. Patterns declaring
  `Categories: ixian` would otherwise be filed under an unlabelled heading in the
  inserter.
- **Pricing pattern** (`patterns/page-pricing.php`) — intro hero, trust bar, the
  three-tier spec-sheet pricing table, a billing-focused FAQ accordion and a closing
  call to action.
- **About pattern** (`patterns/page-about.php`) — hero with dual CTAs, trust bar,
  company story, headline metrics, team capability cards, client quotes and a closing
  call to action.
- **Contact pattern** (`patterns/page-contact.php`) — dark contact section with an
  intro, contact details, an availability badge, and a Contact Form 7 form card.
- **Portfolio pattern** (`patterns/page-portfolio.php`) — intro hero, trust bar, a
  client-site rail carousel, reasons teams switch as capability cards, and a closing
  call to action.

### Changed
- **New palette.** Aviendha's warm rose-on-cream scheme is replaced by a cool
  graphite-and-indigo one: `primary` moves from `#9F1239` to `#2B3FB5`, `base` from
  `#FAF7F2` to `#F6F8FB`, and the warm sand tones become cool steels. All 15 slugs
  are kept — Aludra references 14 of them with hardcoded fallbacks, so dropping or
  renaming any would silently strand blocks on Aviendha's rose.
- Every colour pair carrying text meets WCAG 2.1 AA, preserving Aviendha 1.15.0's
  accessibility audit. Most ratios improve: body text 15.78:1 → 17.08:1, links
  7.50:1 → 7.96:1, accent text 4.67:1 → 5.04:1. `control-border` stays above the
  3:1 required by 1.4.11 (3.42:1 on `base`, 3.15:1 on `tertiary`).
- Gradients renamed from `rose-bloom`/`sunset`/`sand` to `core-bloom`/`signal`/`steel`
  and rebuilt from the new palette. Aludra references no gradient slugs, and the theme
  ships no content, so nothing depended on the old names.
- `twilight` style variation retuned to a dark cool scheme, now including the `indigo`
  slug the Aviendha version omitted.
- The six literal hex fallbacks in the header's scroll-edge keyframes retargeted to the
  new `contrast` and `border-light`.
- New logo mark — the Font Awesome Free "robot" glyph (see Third-Party Libraries in
  `readme.txt`); Aviendha's rose mark removed.
- Renamed throughout: text domain, function prefixes, CSS class hooks, asset slugs and
  stylesheet handles all move from `aviendha`/`Aviendha` to `ixian`/`Ixian`.
- Footer tagline no longer reads "WordPress & WooCommerce" — WooCommerce is an optional
  dependency here, not the theme's subject.

### Known issues
- On the dark stat rail, the "good" figure inherits Aludra's
  `var(--wp--preset--color--accent)`, which resolves to Ixian's `#0E7490` at 3.06:1
  against the `main` band — below the 4.5:1 WCAG AA needs at that size and weight.
  Aviendha 1.15.0 has the same defect (3.31:1). The fix belongs in Aludra as a
  themeable custom property rather than as a theme-side override of Aludra's
  selectors.
