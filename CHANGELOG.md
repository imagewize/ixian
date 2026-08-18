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
- Block templates for pages, posts, archives, search and 404, plus header, dark header
  and footer template parts.
- `twilight` dark style variation.
- WooCommerce block templates, guarded so they are hidden and unloaded when
  WooCommerce is not active.
