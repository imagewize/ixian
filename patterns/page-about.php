<?php
/**
 * Title: About
 * Slug: ixian/page-about
 * Categories: ixian
 * Block Types: core/post-content
 * Description: A full about page — hero with dual CTAs, trust bar, company story, headline metrics, team capability cards, client quotes and a closing call to action.
 *
 * @package Ixian
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!-- wp:aludra/hero-banner {"className":"is-style-canvas"} -->
<div class="wp-block-aludra-hero-banner alignfull is-style-canvas" style="margin-top:0;margin-bottom:0"><div class="hero-banner__content"><!-- wp:group {"className":"hero-banner__eyebrow","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-banner__eyebrow"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-users.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>About us</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"hero-banner__title","style":{"typography":{"lineHeight":"1.15"}}} -->
<h1 class="wp-block-heading hero-banner__title" style="line-height:1.15">We Got Tired Of <em>Fighting Our Own Tools.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-banner__lead"} -->
<p class="hero-banner__lead">Before this was a product, it was six tabs, three dashboards and a deploy process none of us trusted. We built the platform we wished we had — then opened it up.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hero-banner__ctas","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons hero-banner__ctas"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#story">Our Story</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/hero-banner -->

<!-- wp:aludra/trust-bar -->
<div class="wp-block-aludra-trust-bar alignfull"><div class="trust-bar__inner"><!-- wp:group {"className":"trust-bar__items","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap","alignItems":"center","justifyContent":"center"}} -->
<div class="wp-block-group trust-bar__items"><!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-clock.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Founded 2021</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-users.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Fully remote team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-map.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Teams in 40+ countries</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"trust-item","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","alignItems":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group trust-item"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-list.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Public roadmap</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/trust-bar -->

<!-- wp:aludra/spine-section -->
<div class="wp-block-aludra-spine-section alignfull" id="story" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Our story</p><h2 class="spine-section__heading">Built By Engineers, Not A Boardroom.</h2><p class="spine-section__aside">The same three people who wrote the first deploy script still review every release.</p></div><div class="spine-section__content"><!-- wp:aludra/about -->
<div class="wp-block-aludra-about alignfull" style="margin-top:0;margin-bottom:0"><div class="about-section__content"><!-- wp:paragraph {"className":"about-section__lead"} -->
<p class="about-section__lead">We spent a decade shipping other people's products on stacks we didn't choose and couldn't change. Every team we worked with had assembled the same six tools, none of which talked to each other, and all of which someone had to babysit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"about-section__list-intro"} -->
<p class="about-section__list-intro">So we built the platform we kept wishing existed:</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"about-section__list"} -->
<ul class="wp-block-list about-section__list"><!-- wp:list-item -->
<li>One deploy path, from commit to production</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Observability that ships with the platform, not bolted on after</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pricing that doesn't punish a growing team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"about-section__closing"} -->
<p class="about-section__closing">Four years and thousands of deploys later, that is still the whole pitch. We are a small, remote engineering team, and the people building the platform are the same people who answer your support tickets.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:aludra/about --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/stat-rail {"className":"is-style-light"} -->
<div class="wp-block-aludra-stat-rail alignfull is-style-light" style="margin-top:0;margin-bottom:0"><div class="stat-rail__shell"><!-- wp:aludra/stat-item {"number":"2021","caption":"Founded, first deploy shipped the same year","good":true} -->
<div class="wp-block-aludra-stat-item stat-rail__item is-good"><div class="stat-rail__num">2021</div><div class="stat-rail__cap">Founded, first deploy shipped the same year</div></div>
<!-- /wp:aludra/stat-item -->

<!-- wp:aludra/stat-item {"number":"4,000+","caption":"Teams running production on the platform"} -->
<div class="wp-block-aludra-stat-item stat-rail__item"><div class="stat-rail__num">4,000+</div><div class="stat-rail__cap">Teams running production on the platform</div></div>
<!-- /wp:aludra/stat-item -->

<!-- wp:aludra/stat-item {"number":"18","caption":"Engineers, all still shipping code weekly"} -->
<div class="wp-block-aludra-stat-item stat-rail__item"><div class="stat-rail__num">18</div><div class="stat-rail__cap">Engineers, all still shipping code weekly</div></div>
<!-- /wp:aludra/stat-item --></div></div>
<!-- /wp:aludra/stat-rail -->

<!-- wp:aludra/spine-section {"tint":true} -->
<div class="wp-block-aludra-spine-section is-tinted alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">How we work</p><h2 class="spine-section__heading">What Stays True As We Grow.</h2><p class="spine-section__aside">Four commitments that don't change with headcount.</p></div><div class="spine-section__content"><!-- wp:aludra/feature-cards -->
<div class="wp-block-aludra-feature-cards alignfull"><div class="feature-cards__inner"><!-- wp:group {"className":"feature-cards__grid","layout":{"type":"default"}} -->
<div class="wp-block-group feature-cards__grid"><!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-code.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="Engineers on support"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Engineers On Support</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Every reply comes from someone who has read the code, not a script from a ticket queue.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-list.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="Public roadmap"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">A Roadmap You Can See</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>What we are building next is public, and customer requests are what move it up the list.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-shield.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="No vendor lock-in"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Nothing Held Hostage</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Export your data and your configuration at any time, in formats you can actually reuse elsewhere.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"feature-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group feature-card"><!-- wp:group {"className":"feature-card__icon-wrap","layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group feature-card__icon-wrap"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"bindings":{"url":{"source":"aludra/icon","args":{"path":"icon-bar-chart.svg"}}}}} -->
<figure class="wp-block-image size-full"><img src="" alt="Pricing that scales fairly"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
<h4 class="wp-block-heading" style="font-weight:700">Pricing That Scales Fairly</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Priced per project, not per seat — a growing team should never cost more just for logging in.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/feature-cards --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/spine-section -->
<div class="wp-block-aludra-spine-section alignfull" style="margin-top:0;margin-bottom:0"><div class="spine-section__shell"><div class="spine-section__spine"><p class="spine-section__label">Customers</p><h2 class="spine-section__heading">In Their Words.</h2><p class="spine-section__aside">A few teams who moved their production traffic onto the platform.</p></div><div class="spine-section__content"><!-- wp:aludra/review-profiles {"className":"is-style-quotes"} -->
<div class="wp-block-aludra-review-profiles alignfull is-style-quotes" style="margin-top:0;margin-bottom:0"><div class="review-profiles__content"><!-- wp:group {"className":"review-profiles__grid"} -->
<div class="wp-block-group review-profiles__grid"><!-- wp:group {"className":"review-profiles__item","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group review-profiles__item"><!-- wp:paragraph {"className":"review-profiles__quote"} -->
<p class="review-profiles__quote">What sold us wasn't a feature, it was that a support reply once included a link to the exact line of code causing our issue. That doesn't happen at our old vendor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"review-profiles__attribution"} -->
<p class="review-profiles__attribution"><strong>VP Engineering</strong>Northwind Analytics</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"review-profiles__item","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group review-profiles__item"><!-- wp:paragraph {"className":"review-profiles__quote"} -->
<p class="review-profiles__quote">We have grown headcount 4x since switching and our platform bill has barely moved. That was the whole reason we left our old provider.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"review-profiles__attribution"} -->
<p class="review-profiles__attribution"><strong>Founder</strong>Solace Health</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"review-profiles__item","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group review-profiles__item"><!-- wp:paragraph {"className":"review-profiles__quote"} -->
<p class="review-profiles__quote">Their public roadmap actually shipped the two features we asked for, in the order they said they would. That kind of follow-through is rare.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"review-profiles__attribution"} -->
<p class="review-profiles__attribution"><strong>Head of Platform</strong>Cartwell Freight</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:aludra/review-profiles --></div></div></div>
<!-- /wp:aludra/spine-section -->

<!-- wp:aludra/cta-banner {"backgroundColor":"tertiary","textColor":"contrast"} -->
<div class="wp-block-aludra-cta-banner alignfull has-contrast-color has-tertiary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0"><div class="cta-banner__content"><!-- wp:heading {"className":"cta-banner__title","style":{"typography":{"lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading cta-banner__title" style="line-height:1.2">Come build with us.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"cta-banner__lead"} -->
<p class="cta-banner__lead">Free for 14 days, no credit card, and an engineer on hand if you get stuck.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"cta-banner__ctas","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons cta-banner__ctas"><!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" href="#">Start Free Trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:aludra/cta-banner -->
