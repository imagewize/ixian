<?php
/**
 * Title: Portfolio
 * Slug: ixian/page-portfolio
 * Categories: ixian
 * Block Types: core/post-content
 * Description: A customer showcase page — intro hero, trust bar, a client-site rail carousel, reasons teams switch as capability cards, and a closing call to action.
 *
 * @package Ixian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:aludra/hero-banner -->
<div class="wp-block-aludra-hero-banner alignfull" style="margin-top:0;margin-bottom:0"><div class="hero-banner__content"><!-- wp:group {"className":"hero-banner__eyebrow","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-banner__eyebrow"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-patterns.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Customers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"hero-banner__title","style":{"typography":{"lineHeight":"1.15"}}} -->
<h1 class="wp-block-heading hero-banner__title" style="line-height:1.15">Built By Teams <em>Shipping Every Day.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-banner__lead"} -->
<p class="hero-banner__lead">From SaaS dashboards to logistics platforms — a few of the products running their production traffic on us.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-banner__ctas","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons hero-banner__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Book a Demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/hero-banner -->

<!-- wp:aludra/trust-bar -->
<div class="wp-block-aludra-trust-bar alignfull"><div class="trust-bar__inner"><!-- wp:group {"className":"trust-bar__items","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group trust-bar__items"><!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-shield.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>SOC 2 Type II</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-clock.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>99.99% uptime</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-users.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Trusted by 4,000 teams</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-chat.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Support in under an hour</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/trust-bar -->

<!-- wp:aludra/spine-section -->
<div class="wp-block-aludra-spine-section alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Selected customers</p><h2 class="spine-section__heading">A Few Products Running On Us.</h2><p class="spine-section__aside">SaaS dashboards, booking platforms, logistics tools — different markets, the same deploy path.</p></div><div class="spine-section__content"><!-- wp:aludra/carousel {"engine":"rail","arrows":false,"adaptiveHeight":true} -->
<div class="wp-block-aludra-carousel aludra-work-rail work-rail"><!-- wp:aludra/slide -->
<div class="wp-block-aludra-slide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
<figure class="wp-block-image alignfull size-full"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDAwIDI4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyODAiIHJ4PSIxNCIvPjwvY2xpcFBhdGg+CiAgPC9kZWZzPgogIDxnIGNsaXAtcGF0aD0idXJsKCNjbGlwKSI+CiAgICA8cmVjdCB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI4MCIgZmlsbD0iI0Y2RjhGQiIvPgogICAgPHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSI0MiIgZmlsbD0iI0VBRUZGNyIvPgogICAgPGNpcmNsZSBjeD0iMTgiIGN5PSIyMSIgcj0iNCIgZmlsbD0iIzE2MjAyRSIgb3BhY2l0eT0iLjI4Ii8+CiAgICA8Y2lyY2xlIGN4PSIzNiIgY3k9IjIxIiByPSI0IiBmaWxsPSIjMTYyMDJFIiBvcGFjaXR5PSIuMjgiLz4KICAgIDxjaXJjbGUgY3g9IjU0IiBjeT0iMjEiIHI9IjQiIGZpbGw9IiMxNjIwMkUiIG9wYWNpdHk9Ii4yOCIvPgogICAgPHJlY3QgeD0iNzAiIHk9IjEyIiB3aWR0aD0iMzA2IiBoZWlnaHQ9IjE4IiByeD0iOSIgZmlsbD0iI0ZGRkZGRiIgc3Ryb2tlPSIjRDlFMUVFIi8+CiAgICA8dGV4dCB4PSI4MCIgeT0iMjQuNSIgZm9udC1mYW1pbHk9InVpLW1vbm9zcGFjZSwgU0ZNb25vLVJlZ3VsYXIsIE1lbmxvLCBtb25vc3BhY2UiIGZvbnQtc2l6ZT0iMTEiIGZpbGw9IiMxNjIwMkUiIG9wYWNpdHk9Ii41NSI+bm9ydGh3aW5kYW5hbHl0aWNzLmlvPC90ZXh0PgogICAgPHJlY3QgeD0iMjQiIHk9IjY2IiB3aWR0aD0iMTc2IiBoZWlnaHQ9IjEyIiByeD0iNiIgZmlsbD0iIzBGMTYyMCIvPgogICAgPHJlY3QgeD0iMjQiIHk9Ijg4IiB3aWR0aD0iMTEyIiBoZWlnaHQ9IjkiIHJ4PSI0LjUiIGZpbGw9IiMwRjE2MjAiIG9wYWNpdHk9Ii40NSIvPgogICAgPHJlY3QgeD0iMjQiIHk9IjExMiIgd2lkdGg9Ijc2IiBoZWlnaHQ9Ijc2IiByeD0iOCIgZmlsbD0iIzJCM0ZCNSIgb3BhY2l0eT0iLjg1Ii8+CiAgICA8cmVjdCB4PSIxMTIiIHk9IjExMiIgd2lkdGg9Ijc2IiBoZWlnaHQ9Ijc2IiByeD0iOCIgZmlsbD0iIzBFNzQ5MCIgb3BhY2l0eT0iLjciLz4KICAgIDxyZWN0IHg9IjIwMCIgeT0iMTEyIiB3aWR0aD0iNzYiIGhlaWdodD0iMzYiIHJ4PSI4IiBmaWxsPSIjMkIzRkI1IiBvcGFjaXR5PSIuMiIvPgogICAgPHJlY3QgeD0iMjAwIiB5PSIxNTIiIHdpZHRoPSI3NiIgaGVpZ2h0PSIzNiIgcng9IjgiIGZpbGw9IiMwRTc0OTAiIG9wYWNpdHk9Ii4yIi8+CiAgICA8cmVjdCB4PSIyNCIgeT0iMjA0IiB3aWR0aD0iMTUwIiBoZWlnaHQ9IjMwIiByeD0iMTUiIGZpbGw9IiMyQjNGQjUiLz4KICAgIDx0ZXh0IHg9Ijk5IiB5PSIyMjMuNSIgZm9udC1mYW1pbHk9Ii1hcHBsZS1zeXN0ZW0sIEJsaW5rTWFjU3lzdGVtRm9udCwgJ1NlZ29lIFVJJywgUm9ib3RvLCBIZWx2ZXRpY2EsIEFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEyLjUiIGZvbnQtd2VpZ2h0PSI3MDAiIGZpbGw9IiNGRkZGRkYiIHRleHQtYW5jaG9yPSJtaWRkbGUiPlZpZXcgRGFzaGJvYXJkPC90ZXh0PgogIDwvZz4KICA8cmVjdCB4PSIwLjUiIHk9IjAuNSIgd2lkdGg9IjM5OSIgaGVpZ2h0PSIyNzkiIHJ4PSIxMy41IiBmaWxsPSJub25lIiBzdHJva2U9IiNEOUUxRUUiLz4KPC9zdmc+" alt="Northwind Analytics — SaaS dashboard, one of our customer sites"/></figure>
<!-- /wp:image --></div>
<!-- /wp:aludra/slide -->

<!-- wp:aludra/slide -->
<div class="wp-block-aludra-slide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
<figure class="wp-block-image alignfull size-full"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDAwIDI4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyODAiIHJ4PSIxNCIvPjwvY2xpcFBhdGg+CiAgPC9kZWZzPgogIDxnIGNsaXAtcGF0aD0idXJsKCNjbGlwKSI+CiAgICA8cmVjdCB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI4MCIgZmlsbD0iIzBGMTYyMCIvPgogICAgPHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSI0MiIgZmlsbD0iIzE2MjAyRSIvPgogICAgPGNpcmNsZSBjeD0iMTgiIGN5PSIyMSIgcj0iNCIgZmlsbD0iI0YyRjFFRSIgb3BhY2l0eT0iLjI4Ii8+CiAgICA8Y2lyY2xlIGN4PSIzNiIgY3k9IjIxIiByPSI0IiBmaWxsPSIjRjJGMUVFIiBvcGFjaXR5PSIuMjgiLz4KICAgIDxjaXJjbGUgY3g9IjU0IiBjeT0iMjEiIHI9IjQiIGZpbGw9IiNGMkYxRUUiIG9wYWNpdHk9Ii4yOCIvPgogICAgPHJlY3QgeD0iNzAiIHk9IjEyIiB3aWR0aD0iMzA2IiBoZWlnaHQ9IjE4IiByeD0iOSIgZmlsbD0iIzE2MjAyRSIgc3Ryb2tlPSIjMkEyQzMxIi8+CiAgICA8dGV4dCB4PSI4MCIgeT0iMjQuNSIgZm9udC1mYW1pbHk9InVpLW1vbm9zcGFjZSwgU0ZNb25vLVJlZ3VsYXIsIE1lbmxvLCBtb25vc3BhY2UiIGZvbnQtc2l6ZT0iMTEiIGZpbGw9IiNGMkYxRUUiIG9wYWNpdHk9Ii41NSI+ZmVud2lja2xlZ2FsLmNvbTwvdGV4dD4KICAgIDxyZWN0IHg9IjI0IiB5PSI2NiIgd2lkdGg9IjMyIiBoZWlnaHQ9IjMyIiByeD0iOCIgZmlsbD0iIzJCM0ZCNSIvPgogICAgPHRleHQgeD0iNDAiIHk9Ijg4LjUiIGZvbnQtZmFtaWx5PSJHZW9yZ2lhLCAnVGltZXMgTmV3IFJvbWFuJywgc2VyaWYiIGZvbnQtc3R5bGU9Iml0YWxpYyIgZm9udC13ZWlnaHQ9IjcwMCIgZm9udC1zaXplPSIxNiIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+RjwvdGV4dD4KICAgIDxyZWN0IHg9IjI0IiB5PSIxMTQiIHdpZHRoPSIyMjgiIGhlaWdodD0iMTMiIHJ4PSI2LjUiIGZpbGw9IiNGMkYxRUUiLz4KICAgIDxyZWN0IHg9IjI0IiB5PSIxMzYiIHdpZHRoPSIyNzYiIGhlaWdodD0iOSIgcng9IjQuNSIgZmlsbD0iI0YyRjFFRSIgb3BhY2l0eT0iLjQ1Ii8+CiAgICA8cmVjdCB4PSIyNCIgeT0iMTU2IiB3aWR0aD0iMTEwIiBoZWlnaHQ9IjQyIiByeD0iOCIgZmlsbD0iI0ZGRkZGRiIgb3BhY2l0eT0iLjA4Ii8+CiAgICA8cmVjdCB4PSIxNDQiIHk9IjE1NiIgd2lkdGg9IjExMCIgaGVpZ2h0PSI0MiIgcng9IjgiIGZpbGw9IiNGRkZGRkYiIG9wYWNpdHk9Ii4wOCIvPgogICAgPHJlY3QgeD0iMjQiIHk9IjIwNCIgd2lkdGg9IjE1MCIgaGVpZ2h0PSIzMCIgcng9IjE1IiBmaWxsPSIjMkIzRkI1Ii8+CiAgICA8dGV4dCB4PSI5OSIgeT0iMjIzLjUiIGZvbnQtZmFtaWx5PSItYXBwbGUtc3lzdGVtLCBCbGlua01hY1N5c3RlbUZvbnQsICdTZWdvZSBVSScsIFJvYm90bywgSGVsdmV0aWNhLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMi41IiBmb250LXdlaWdodD0iNzAwIiBmaWxsPSIjRkZGRkZGIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5Cb29rIENvbnN1bHQ8L3RleHQ+CiAgPC9nPgogIDxyZWN0IHg9IjAuNSIgeT0iMC41IiB3aWR0aD0iMzk5IiBoZWlnaHQ9IjI3OSIgcng9IjEzLjUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzJBMkMzMSIvPgo8L3N2Zz4=" alt="Fenwick Legal — professional services website, one of our customer sites"/></figure>
<!-- /wp:image --></div>
<!-- /wp:aludra/slide -->

<!-- wp:aludra/slide -->
<div class="wp-block-aludra-slide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
<figure class="wp-block-image alignfull size-full"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDAwIDI4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyODAiIHJ4PSIxNCIvPjwvY2xpcFBhdGg+CiAgPC9kZWZzPgogIDxnIGNsaXAtcGF0aD0idXJsKCNjbGlwKSI+CiAgICA8cmVjdCB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI4MCIgZmlsbD0iI0VBRUZGNyIvPgogICAgPHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSI0MiIgZmlsbD0iI0Q5RTFFRSIvPgogICAgPGNpcmNsZSBjeD0iMTgiIGN5PSIyMSIgcj0iNCIgZmlsbD0iIzBGMTYyMCIgb3BhY2l0eT0iLjI4Ii8+CiAgICA8Y2lyY2xlIGN4PSIzNiIgY3k9IjIxIiByPSI0IiBmaWxsPSIjMEYxNjIwIiBvcGFjaXR5PSIuMjgiLz4KICAgIDxjaXJjbGUgY3g9IjU0IiBjeT0iMjEiIHI9IjQiIGZpbGw9IiMwRjE2MjAiIG9wYWNpdHk9Ii4yOCIvPgogICAgPHJlY3QgeD0iNzAiIHk9IjEyIiB3aWR0aD0iMzA2IiBoZWlnaHQ9IjE4IiByeD0iOSIgZmlsbD0iI0ZGRkZGRiIgc3Ryb2tlPSIjRDlFMUVFIi8+CiAgICA8dGV4dCB4PSI4MCIgeT0iMjQuNSIgZm9udC1mYW1pbHk9InVpLW1vbm9zcGFjZSwgU0ZNb25vLVJlZ3VsYXIsIE1lbmxvLCBtb25vc3BhY2UiIGZvbnQtc2l6ZT0iMTEiIGZpbGw9IiMwRjE2MjAiIG9wYWNpdHk9Ii41NSI+c29sYWNlaGVhbHRoLmFwcDwvdGV4dD4KICAgIDxwYXRoIGQ9Ik0yNiAxMDBDMjYgNzggNDQgNjQgNjYgNjdDODggNzAgMTAyIDg0IDk5IDEwNEM5NiAxMjQgNzggMTM2IDU4IDEzM0MzOCAxMzAgMjYgMTIwIDI2IDEwMFoiIGZpbGw9IiMwRTc0OTAiIG9wYWNpdHk9Ii42Ii8+CiAgICA8cmVjdCB4PSIyNCIgeT0iMTU2IiB3aWR0aD0iMTc2IiBoZWlnaHQ9IjEyIiByeD0iNiIgZmlsbD0iIzBGMTYyMCIvPgogICAgPHJlY3QgeD0iMjQiIHk9IjE3OCIgd2lkdGg9IjExMiIgaGVpZ2h0PSI5IiByeD0iNC41IiBmaWxsPSIjMEYxNjIwIiBvcGFjaXR5PSIuNDUiLz4KICAgIDxyZWN0IHg9IjI0IiB5PSIyMDQiIHdpZHRoPSIxNTAiIGhlaWdodD0iMzAiIHJ4PSIxNSIgZmlsbD0iIzBFNzQ5MCIvPgogICAgPHRleHQgeD0iOTkiIHk9IjIyMy41IiBmb250LWZhbWlseT0iLWFwcGxlLXN5c3RlbSwgQmxpbmtNYWNTeXN0ZW1Gb250LCAnU2Vnb2UgVUknLCBSb2JvdG8sIEhlbHZldGljYSwgQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTIuNSIgZm9udC13ZWlnaHQ9IjcwMCIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+Qm9vayBhIFZpc2l0PC90ZXh0PgogIDwvZz4KICA8cmVjdCB4PSIwLjUiIHk9IjAuNSIgd2lkdGg9IjM5OSIgaGVpZ2h0PSIyNzkiIHJ4PSIxMy41IiBmaWxsPSJub25lIiBzdHJva2U9IiNEOUUxRUUiLz4KPC9zdmc+" alt="Solace Health — booking platform, one of our customer sites"/></figure>
<!-- /wp:image --></div>
<!-- /wp:aludra/slide -->

<!-- wp:aludra/slide -->
<div class="wp-block-aludra-slide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
<figure class="wp-block-image alignfull size-full"><img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNDAwIDI4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+PHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSIyODAiIHJ4PSIxNCIvPjwvY2xpcFBhdGg+CiAgPC9kZWZzPgogIDxnIGNsaXAtcGF0aD0idXJsKCNjbGlwKSI+CiAgICA8cmVjdCB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI4MCIgZmlsbD0iI0Y2RjhGQiIvPgogICAgPHJlY3Qgd2lkdGg9IjQwMCIgaGVpZ2h0PSI0MiIgZmlsbD0iI0VBRUZGNyIvPgogICAgPGNpcmNsZSBjeD0iMTgiIGN5PSIyMSIgcj0iNCIgZmlsbD0iIzE2MjAyRSIgb3BhY2l0eT0iLjI4Ii8+CiAgICA8Y2lyY2xlIGN4PSIzNiIgY3k9IjIxIiByPSI0IiBmaWxsPSIjMTYyMDJFIiBvcGFjaXR5PSIuMjgiLz4KICAgIDxjaXJjbGUgY3g9IjU0IiBjeT0iMjEiIHI9IjQiIGZpbGw9IiMxNjIwMkUiIG9wYWNpdHk9Ii4yOCIvPgogICAgPHJlY3QgeD0iNzAiIHk9IjEyIiB3aWR0aD0iMzA2IiBoZWlnaHQ9IjE4IiByeD0iOSIgZmlsbD0iI0ZGRkZGRiIgc3Ryb2tlPSIjRDlFMUVFIi8+CiAgICA8dGV4dCB4PSI4MCIgeT0iMjQuNSIgZm9udC1mYW1pbHk9InVpLW1vbm9zcGFjZSwgU0ZNb25vLVJlZ3VsYXIsIE1lbmxvLCBtb25vc3BhY2UiIGZvbnQtc2l6ZT0iMTEiIGZpbGw9IiMxNjIwMkUiIG9wYWNpdHk9Ii41NSI+Y2FydHdlbGxmcmVpZ2h0LmNvbTwvdGV4dD4KICAgIDxyZWN0IHg9IjI0IiB5PSI2NiIgd2lkdGg9IjE2MCIgaGVpZ2h0PSIxMiIgcng9IjYiIGZpbGw9IiMwRjE2MjAiLz4KICAgIDxyZWN0IHg9IjI0IiB5PSI5NCIgd2lkdGg9Ijc2IiBoZWlnaHQ9Ijc2IiByeD0iOCIgZmlsbD0iI0IzNDMwOSIgb3BhY2l0eT0iLjE4Ii8+CiAgICA8cmVjdCB4PSIxMTIiIHk9Ijk0IiB3aWR0aD0iNzYiIGhlaWdodD0iNzYiIHJ4PSI4IiBmaWxsPSIjQjM0MzA5IiBvcGFjaXR5PSIuMyIvPgogICAgPHJlY3QgeD0iMjAwIiB5PSI5NCIgd2lkdGg9Ijc2IiBoZWlnaHQ9Ijc2IiByeD0iOCIgZmlsbD0iI0IzNDMwOSIgb3BhY2l0eT0iLjQ1Ii8+CiAgICA8cmVjdCB4PSIyODgiIHk9Ijk0IiB3aWR0aD0iNzYiIGhlaWdodD0iNzYiIHJ4PSI4IiBmaWxsPSIjQjM0MzA5IiBvcGFjaXR5PSIuNiIvPgogICAgPHJlY3QgeD0iMjQiIHk9IjIwNCIgd2lkdGg9IjE1MCIgaGVpZ2h0PSIzMCIgcng9IjE1IiBmaWxsPSIjQjM0MzA5Ii8+CiAgICA8dGV4dCB4PSI5OSIgeT0iMjIzLjUiIGZvbnQtZmFtaWx5PSItYXBwbGUtc3lzdGVtLCBCbGlua01hY1N5c3RlbUZvbnQsICdTZWdvZSBVSScsIFJvYm90bywgSGVsdmV0aWNhLCBBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMi41IiBmb250LXdlaWdodD0iNzAwIiBmaWxsPSIjRkZGRkZGIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5UcmFjayBTaGlwbWVudDwvdGV4dD4KICA8L2c+CiAgPHJlY3QgeD0iMC41IiB5PSIwLjUiIHdpZHRoPSIzOTkiIGhlaWdodD0iMjc5IiByeD0iMTMuNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRDlFMUVFIi8+Cjwvc3ZnPg==" alt="Cartwell Freight — logistics platform, one of our customer sites"/></figure>
<!-- /wp:image --></div>
<!-- /wp:aludra/slide --></div>
<!-- /wp:aludra/carousel --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/spine-section {"tint":true} -->
<div class="wp-block-aludra-spine-section is-tinted alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Why they switched</p><h2 class="spine-section__heading">The Reasons That Come Up Most.</h2><p class="spine-section__aside">Four things every one of these teams mentioned in their first month.</p></div><div class="spine-section__content"><!-- wp:aludra/feature-cards -->
<div class="wp-block-aludra-feature-cards alignfull"><div class="feature-cards__inner"><!-- wp:group {"className":"feature-cards__grid","layout":{"type":"default"}} -->
<div class="wp-block-group feature-cards__grid"><!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-performance.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="Faster deploys"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Faster Deploys</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Most teams cut their commit-to-live time by more than half in the first week, without changing how they write code.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-bar-chart.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="One bill, not six"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">One Bill, Not Six</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hosting, observability, secrets and CI used to be four separate vendors. Now it's one line on the invoice.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-chat.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="Support that answers"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Support That Actually Answers</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Under an hour, from someone who can read the stack trace — not a queue that reroutes the question back at you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-shield.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="No lock-in"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Nothing Held Hostage</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Standard formats, documented exports, and a self-host option on Scale — migrating in was never a one-way door.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/feature-cards --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/cta-banner -->
<div class="wp-block-aludra-cta-banner alignfull" style="margin-top:0;margin-bottom:0"><div class="cta-banner__content"><!-- wp:heading {"className":"cta-banner__title","style":{"typography":{"lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading cta-banner__title" style="line-height:1.2">Want your product on this list?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"cta-banner__lead"} -->
<p class="cta-banner__lead">Free for 14 days, no credit card, and an engineer on hand if you get stuck.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"cta-banner__ctas","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons cta-banner__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/cta-banner -->
