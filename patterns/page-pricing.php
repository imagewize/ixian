<?php
/**
 * Title: Pricing
 * Slug: ixian/page-pricing
 * Categories: ixian
 * Block Types: core/post-content
 * Description: A pricing page — intro hero, trust bar, the three-tier spec-sheet pricing table, a billing-focused FAQ accordion and a closing call to action.
 *
 * @package Ixian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:aludra/hero-banner {"className":"is-style-canvas"} -->
<div class="wp-block-aludra-hero-banner alignfull is-style-canvas" style="margin-top:0;margin-bottom:0"><div class="hero-banner__content"><!-- wp:group {"className":"hero-banner__eyebrow","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-banner__eyebrow"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-bar-chart.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Pricing</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"hero-banner__title","style":{"typography":{"lineHeight":"1.15"}}} -->
<h1 class="wp-block-heading hero-banner__title" style="line-height:1.15">Priced For How You <em>Actually Grow.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-banner__lead"} -->
<p class="hero-banner__lead">Every plan includes the full platform — no feature gates, no per-seat surprises. Move up when you need more capacity, not more features.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-banner__ctas","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons hero-banner__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Talk to Sales</a></div>
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
<p>No credit card to trial</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-x-circle.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Cancel any time</p>
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
<div class="wp-block-aludra-spine-section alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Plans</p><h2 class="spine-section__heading">Three Plans, One Platform.</h2><p class="spine-section__aside">Start free, upgrade when you need more capacity. Nothing is held back behind a higher tier.</p></div><div class="spine-section__content"><!-- wp:aludra/pricing-tiers {"backgroundColor":"","className":"is-style-spec-sheet"} -->
<div class="wp-block-aludra-pricing-tiers is-style-spec-sheet alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Starter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pricing-who"} -->
<p class="pricing-who">For solo builders and side projects</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-price"} -->
<p class="pricing-price">€19<span class="pricing-price__unit">/ month</span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="wp-block-list pricing-features"><!-- wp:list-item -->
<li>3 projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Preview environments</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>7-day log retention</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Community support</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"pricing-cta"} -->
<div class="wp-block-buttons pricing-cta"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#">Start Free</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"pricing-featured-column"} -->
<div class="wp-block-column pricing-featured-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Team <span class="pricing-tag">Most popular</span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pricing-who"} -->
<p class="pricing-who">For teams shipping every week</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-price"} -->
<p class="pricing-price">€79<span class="pricing-price__unit">/ month</span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="wp-block-list pricing-features"><!-- wp:list-item -->
<li>Unlimited projects</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Full observability suite</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>90-day log retention</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1-hour support response</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"pricing-cta"} -->
<div class="wp-block-buttons pricing-cta"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Scale</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"pricing-who"} -->
<p class="pricing-who">For organisations with compliance needs</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-price"} -->
<p class="pricing-price">Custom<span class="pricing-price__unit">/ annual</span></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"pricing-features"} -->
<ul class="wp-block-list pricing-features"><!-- wp:list-item -->
<li>Everything in Team</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SSO and SCIM</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Dedicated capacity</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Named support engineer</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"pricing-cta"} -->
<div class="wp-block-buttons pricing-cta"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#">Talk to Sales</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:aludra/pricing-tiers --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/spine-section {"tint":true} -->
<div class="wp-block-aludra-spine-section is-tinted alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Billing</p><h2 class="spine-section__heading">Questions About Billing.</h2><p class="spine-section__aside"></p></div><div class="spine-section__content"><!-- wp:aludra/faq-tabs {"displayMode":"native"} -->
<div class="wp-block-aludra-faq-tabs alignwide faq-tabs-wrapper is-display-mode-native" data-display-mode="native"><div class="faq-native"><!-- wp:aludra/faq-tab-answer {"question":"What happens if I go over a plan limit?","title":"Overages","displayMode":"native","openByDefault":true} -->
<details class="wp-block-aludra-faq-tab-answer faq-tab-answer" data-question="What happens if I go over a plan limit?" open><summary>What happens if I go over a plan limit?</summary><div class="faq-answer-content"><!-- wp:paragraph -->
<p>Nothing breaks. You will see a notice in the dashboard well before you hit a limit, and we will never throttle a production deploy because of billing.</p>
<!-- /wp:paragraph --></div></details>
<!-- /wp:aludra/faq-tab-answer -->

<!-- wp:aludra/faq-tab-answer {"question":"Can I switch plans or cancel any time?","title":"Changing plans","displayMode":"native"} -->
<details class="wp-block-aludra-faq-tab-answer faq-tab-answer" data-question="Can I switch plans or cancel any time?"><summary>Can I switch plans or cancel any time?</summary><div class="faq-answer-content"><!-- wp:paragraph -->
<p>Yes. Upgrades take effect immediately and are prorated. Downgrades and cancellations take effect at the end of the current billing period — no penalty either way.</p>
<!-- /wp:paragraph --></div></details>
<!-- /wp:aludra/faq-tab-answer -->

<!-- wp:aludra/faq-tab-answer {"question":"Do you offer a discount for paying annually?","title":"Annual billing","displayMode":"native"} -->
<details class="wp-block-aludra-faq-tab-answer faq-tab-answer" data-question="Do you offer a discount for paying annually?"><summary>Do you offer a discount for paying annually?</summary><div class="faq-answer-content"><!-- wp:paragraph -->
<p>Team and Scale plans both get two months free when billed annually. Ask your account rep to switch you over — it takes effect on your next renewal.</p>
<!-- /wp:paragraph --></div></details>
<!-- /wp:aludra/faq-tab-answer -->

<!-- wp:aludra/faq-tab-answer {"question":"What payment methods do you accept?","title":"Payment methods","displayMode":"native"} -->
<details class="wp-block-aludra-faq-tab-answer faq-tab-answer" data-question="What payment methods do you accept?"><summary>What payment methods do you accept?</summary><div class="faq-answer-content"><!-- wp:paragraph -->
<p>All major cards, plus invoiced bank transfer for Scale plans on annual terms. Talk to sales if you need a purchase order.</p>
<!-- /wp:paragraph --></div></details>
<!-- /wp:aludra/faq-tab-answer --></div></div>
<!-- /wp:aludra/faq-tabs --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/cta-banner {"className":"is-style-light"} -->
<div class="wp-block-aludra-cta-banner alignfull is-style-light" style="margin-top:0;margin-bottom:0"><div class="cta-banner__content"><!-- wp:heading {"className":"cta-banner__title","style":{"typography":{"lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading cta-banner__title" style="line-height:1.2">Still deciding which plan?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"cta-banner__lead"} -->
<p class="cta-banner__lead">Start on Starter and upgrade in a click when you outgrow it — or talk to us first if you already know you need Scale.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"cta-banner__ctas","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons cta-banner__ctas"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/cta-banner -->
