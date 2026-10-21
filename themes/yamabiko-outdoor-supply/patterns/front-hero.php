<?php
/**
 * Title: Home: cover with info bar
 * Slug: yamabiko-outdoor-supply/front-hero
 * Categories: yamabiko-outdoor-supply
 * Keywords: outdoor, camping, gear, shop
 * Viewport Width: 1440
 * Description: Full-bleed photo, low-left headline, info bar, dash index.
 */
$yb = get_theme_file_uri( 'assets/images/' );
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"yb-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull yb-hero"><!-- wp:image {"sizeSlug":"full","className":"yb-hero__photo"} -->
<figure class="wp-block-image size-full yb-hero__photo"><img src="<?php echo esc_url( $yb . 'p01-hero.webp' ); ?>" alt="Two hikers packing up a small grey tent on a pale granite plateau at dawn"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"yb-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group yb-hero__copy"><!-- wp:paragraph {"className":"yb-hero__label"} -->
<p class="yb-hero__label">Est. 2011 · 14 Quarry Lane, Harrow Gap</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yb-hero__title"} -->
<h1 class="wp-block-heading yb-hero__title">Slept in<br>before it’s sold.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yb-hero__lead"} -->
<p class="yb-hero__lead">Tents, packs and layers we have carried ourselves, with honest spec sheets and a repair bench behind the counter.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"yb-hero__actions"} -->
<div class="wp-block-buttons yb-hero__actions"><!-- wp:button {"className":"yb-btn-light"} -->
<div class="wp-block-button yb-btn-light"><a class="wp-block-button__link wp-element-button" href="/shop/">Browse the catalogue</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link yb-link-white"} -->
<div class="wp-block-button is-style-text-link yb-link-white"><a class="wp-block-button__link wp-element-button" href="/compare/">Compare tents →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yb-info","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yb-info"><!-- wp:group {"className":"yb-info__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__in"><!-- wp:group {"className":"yb-info__cell yb-info__cell--open","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell yb-info__cell--open"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k">Open today</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v">Tue–Fri 10:00–19:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k">Shop</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v">14 Quarry Lane, Harrow Gap</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k">Delivery</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v">Free over €120</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yb-info__cell","layout":{"type":"default"}} -->
<div class="wp-block-group yb-info__cell"><!-- wp:paragraph {"className":"yb-info__k"} -->
<p class="yb-info__k">Returns</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yb-info__v"} -->
<p class="yb-info__v">30-day trail returns</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<nav class="yb-index" aria-label="On this page"><a href="#top" class="is-active" aria-current="location"><i></i>Top</a><a href="#catalogue"><i></i>Catalogue</a><a href="#shelves"><i></i>Shelves</a><a href="#compare"><i></i>Compare</a><a href="#tests"><i></i>Field tests</a><a href="#workshop"><i></i>Workshop</a><a href="#stories"><i></i>Stories</a><a href="#visit"><i></i>Visit</a></nav>
<!-- /wp:html -->
