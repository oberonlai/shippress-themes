<?php
/**
 * Title: Shop page (static)
 * Slug: aya-paper/inner-shop
 * Categories: aya-paper
 * Keywords: stationery, shop, paper
 * Viewport Width: 1440
 * Description: The shop page without WooCommerce: the small frame, categories and the eight packs as spec rows.
 */
?>
<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Shop</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-lead"} -->
<p class="ap-lead">Six papers, envelopes and a stitched notebook, sold by the pack from the counter in Ghent.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-minifr__outer","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-minifr__outer">
<!-- wp:group {"className":"ap-minifr__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ap-minifr__wrap">
<!-- wp:group {"className":"ap-frame ap-minifr","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame ap-minifr">
<!-- wp:group {"className":"ap-cells","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cells">
<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h3.webp' ) ); ?>" alt="<?php echo esc_attr( "Stack of plain notebooks on a white shelf with spines facing out." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/w1.webp' ) ); ?>" alt="<?php echo esc_attr( "A hand holding a pale sheet up to a bright window." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cell">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/v1.webp' ) ); ?>" alt="<?php echo esc_attr( "From inside the shop, a customer entering through plain glazed doors." ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:html -->
<img class="ap-contour ap-contour--sm" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-contour.svg' ) ); ?>" alt="" aria-hidden="true" width="1360" height="776"/>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-cat ap-cat--short","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-cat ap-cat--short">
<!-- wp:group {"className":"ap-cat__label","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cat__label">
<!-- wp:paragraph {"className":"ap-label sp-reveal sp-reveal--up"} -->
<p class="ap-label sp-reveal sp-reveal--up">Categories</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-cat__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cat__body">
<!-- wp:group {"className":"ap-cat__grid sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cat__grid sp-stagger">
<!-- wp:group {"className":"ap-ent sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ap-ent sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#shop-airmail-bank">Paper</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-ent__meta"} -->
<p class="ap-ent__meta">Airmail Bank, Everyday Bond, Laid Writing, Soft Wove and Cotton Rag.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-ent__mono"} -->
<p class="ap-ent__mono">5 packs · 45 to 300 gsm</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-ent sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ap-ent sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#shop-grey-card">Card</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-ent__meta"} -->
<p class="ap-ent__meta">Grey Card, 250 gsm, A5, for cards and backing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-ent__mono"} -->
<p class="ap-ent__mono">1 pack · 250 gsm</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-ent sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ap-ent sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#shop-plain-envelopes">Envelopes</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-ent__meta"} -->
<p class="ap-ent__meta">Plain Envelopes, C6, 25 to a pack.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-ent__mono"} -->
<p class="ap-ent__mono">1 pack · 120 gsm</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-ent sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ap-ent sp-reveal sp-reveal--up">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="#shop-stitched-notebook">Notebooks</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-ent__meta"} -->
<p class="ap-ent__meta">The Stitched Notebook, A5, 96 pages.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-ent__mono"} -->
<p class="ap-ent__mono">1 pack · 100 gsm</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","anchor":"the-eight","className":"ap-sec ap-band ap-papers","layout":{"type":"default"}} -->
<section id="the-eight" class="wp-block-group alignfull ap-sec ap-band ap-papers">
<!-- wp:group {"className":"ap-papers__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-papers__head">
<!-- wp:heading {"level":2,"className":"ap-head"} -->
<h2 class="wp-block-heading ap-head">The eight things we sell</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-rows","layout":{"type":"default"}} -->
<div class="wp-block-group ap-rows">
<!-- wp:group {"anchor":"shop-airmail-bank","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-airmail-bank" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">45<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#airmail-bank">Airmail Bank</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">A sheet for a letter going abroad.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A4</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Long letters abroad</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">100</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€9</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-everyday-bond","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-everyday-bond" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">80<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#everyday-bond">Everyday Bond</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">The sheet for the desk and the printer.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A4</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Daily writing and printing</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">250</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€12</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-laid-writing","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-laid-writing" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">100<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#laid-writing">Laid Writing</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">Chain lines you can see in the light.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A4</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Letters by hand</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">100</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€14</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-soft-wove","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-soft-wove" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">120<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#soft-wove">Soft Wove</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">A faintly warm white for a fountain pen.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A4</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Fountain pens</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">50</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€13</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-grey-card","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-grey-card" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">250<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#grey-card">Grey Card</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">Thick card with square edges.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A5</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Cards and backing</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">25</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€11</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-cotton-rag","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-cotton-rag" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">300<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/papers/#cotton-rag">Cotton Rag</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">Deckle edges on every side.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A3</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Watercolour and invitations</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">10</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€24</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-plain-envelopes","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-plain-envelopes" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">120<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/envelopes-notebooks/#plain-envelopes">Plain Envelopes</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">The only envelope we sell.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">C6</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">One A4 folded twice</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">25</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€8</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"shop-stitched-notebook","className":"ap-row","layout":{"type":"default"}} -->
<div id="shop-stitched-notebook" class="wp-block-group ap-row">
<!-- wp:paragraph {"className":"ap-row__fig"} -->
<p class="ap-row__fig">100<small class="ap-unit">gsm</small></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ap-row__name","layout":{"type":"default"}} -->
<div class="wp-block-group ap-row__name">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="/envelopes-notebooks/#stitched-notebook">Stitched Notebook</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-row__line"} -->
<p class="ap-row__line">Stitched in the shop at 14:00.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec">
<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Size</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">A5</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Suits</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">Everyday notes</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Sheets</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">96 pages</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-spec__cell ap-spec__cell--price","layout":{"type":"default"}} -->
<div class="wp-block-group ap-spec__cell ap-spec__cell--price">
<!-- wp:paragraph {"className":"ap-spec__k"} -->
<p class="ap-spec__k">Price</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ap-spec__v"} -->
<p class="ap-spec__v">€16</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-prose">
<!-- wp:group {"className":"ap-prose__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__head">
<!-- wp:heading {"level":2,"className":"ap-subh"} -->
<h2 class="wp-block-heading ap-subh">Paper, card, envelopes and notebooks</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p>The shop has four categories: Paper, Card, Envelopes and Notebooks. Tags on the sheets are light, medium, heavy, cotton and laid, so you can narrow the list without leaving the papers we actually keep. Airmail Bank is the light sheet. Everyday Bond, Laid Writing and Soft Wove are the writing weights. Grey Card is the heavy card.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Cotton Rag carries the cotton tag, and Laid Writing carries the laid tag. Ravi Nair looks after web orders. If you are standing in Ghent, Aya Mensah can take the same order at the counter. Cutting to size is free, and the kraft wrap tied with cotton tape is free.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-prose">
<!-- wp:group {"className":"ap-prose__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__head">
<!-- wp:heading {"level":2,"className":"ap-subh"} -->
<h2 class="wp-block-heading ap-subh">If the cart is not available</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-prose__body","layout":{"type":"default"}} -->
<div class="wp-block-group ap-prose__body">
<!-- wp:paragraph -->
<p>When the cart is not running, the papers stay on this page as a plain list with weight, size, sheet count and price. Write to hello@ayapaper.example or come to 17 Papierstraat, 9000 Ghent. The door is open Tuesday to Saturday, 10:00 to 18:00. Say which paper you want, the size if it is not the size in the list, and whether the parcel should be posted.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Delivery is free over €60. Otherwise it is a flat €7 in the EU and €16 elsewhere. We dispatch in two working days.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
