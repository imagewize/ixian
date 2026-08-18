# Changelog

All notable changes to Ixian are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2026-08-18

Initial release. Ixian is forked from [Aviendha](https://github.com/imagewize/aviendha)
1.15.0 and re-aimed at service businesses and SaaS companies. It inherits Aviendha's
`theme.json` design system, block templates and template parts; the palette, branding
and page composition diverge from here.

### Added
- Full-site-editing design system in `theme.json` — 15-colour palette, 3 gradients,
  9 font sizes, 6 spacing steps, 4 border radii.

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
- Block templates for pages, posts, archives, search and 404, plus header, dark header
  and footer template parts.
- `twilight` dark style variation.
- WooCommerce block templates, guarded so they are hidden and unloaded when
  WooCommerce is not active.
