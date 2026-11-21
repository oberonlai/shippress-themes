<?php
/**
 * Title: Home: split hero
 * Slug: mebuki-college/front-hero
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Description: Pale split hero: text and two buttons at the left beside one documentary photograph at the right with the tutor chalk marks drawn over it; three white dated cards dock over the photo foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"mb-hero","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull mb-hero"><!-- wp:group {"className":"mb-hero__main","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__main"><!-- wp:group {"className":"mb-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__text"><!-- wp:paragraph {"className":"mb-eyebrow"} -->
<p class="mb-eyebrow"><?php echo esc_html( mebuki_college_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"mb-hero__h"} -->
<h1 class="wp-block-heading mb-hero__h"><?php echo esc_html( mebuki_college_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mb-hero__lede"} -->
<p class="mb-hero__lede"><?php echo esc_html( mebuki_college_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"mb-hero__actions","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__actions"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"mb-btn mb-btn--arrow"} -->
<div class="wp-block-button mb-btn mb-btn--arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'cta_open' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"mb-hero__link"} -->
<p class="mb-hero__link"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>"><?php echo esc_html( mebuki_college_t( 'cta_apply' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__photo sp-parallax"><!-- wp:group {"className":"sp-parallax__layer mb-hero__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer mb-hero__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"mb-hero__img"} -->
<figure class="wp-block-image size-full mb-hero__img"><img src="<?php echo mebuki_college_img( 'p01-kv-sand-table.webp' ); ?>" alt="<?php echo mebuki_college_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:html -->
<svg class="mb-chalk" viewBox="0 0 800 740" preserveAspectRatio="xMidYMid slice" aria-hidden="true" focusable="false"><path class="mb-chalk__loop" pathLength="1" d="M470 598C442 540 300 522 216 570C140 614 150 688 250 704C362 720 472 692 484 626C492 572 402 540 318 548"/><path class="mb-chalk__arrow" pathLength="1" d="M478 546C524 470 506 362 548 238M548 238L522 264M548 238L570 270"/><path class="mb-chalk__tick" pathLength="1" d="M452 162L478 198L526 140"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-hero__cards","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__cards"><!-- wp:group {"className":"mb-hcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hcard"><!-- wp:paragraph {"className":"mb-hcard__label"} -->
<p class="mb-hcard__label"><?php echo esc_html( mebuki_college_t( 'hc1_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="mb-hcard__rows"><a href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>" class="mb-hcard__row"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc1_d1' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc1_t1' ) ); ?></a><a href="<?php echo esc_url( home_url( '/open-days/' ) ); ?>" class="mb-hcard__row mb-hcard__row--2"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc1_d2' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc1_t2' ) ); ?></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-hcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hcard"><!-- wp:paragraph {"className":"mb-hcard__label"} -->
<p class="mb-hcard__label"><?php echo esc_html( mebuki_college_t( 'hc2_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="mb-hcard__rows"><a href="#day" class="mb-hcard__row"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc2_d1' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc2_t1' ) ); ?></a><a href="#day" class="mb-hcard__row mb-hcard__row--2"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc2_d2' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc2_t2' ) ); ?></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"mb-hcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hcard"><!-- wp:paragraph {"className":"mb-hcard__label"} -->
<p class="mb-hcard__label"><?php echo esc_html( mebuki_college_t( 'hc3_l' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="mb-hcard__rows"><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>" class="mb-hcard__row"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc3_d1' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc3_t1' ) ); ?></a><a href="<?php echo esc_url( home_url( '/admissions/' ) ); ?>" class="mb-hcard__row mb-hcard__row--2"><span class="mb-hcard__d"><?php echo esc_html( mebuki_college_t( 'hc3_d2' ) ); ?></span> <?php echo esc_html( mebuki_college_t( 'hc3_t2' ) ); ?></a></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
