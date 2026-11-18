<?php
/**
 * Title: Home: hero
 * Slug: taruki-distillery/front-hero
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: Split first screen: a film-grain photograph flush left (slow parallax), the headline on charcoal at the right, and a six-dot batch timeline along the foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-hero"><!-- wp:group {"align":"full","className":"td-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull td-hero__grid"><!-- wp:group {"className":"td-hero__photo sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__photo sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo taruki_img( 'img-01.webp' ); ?>" alt="<?php echo taruki_a( 'alt_01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__text"><!-- wp:paragraph {"className":"td-caps td-caps--light"} -->
<p class="td-caps td-caps--light"><?php echo esc_html( taruki_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-h1"} -->
<h1 class="wp-block-heading td-h1"><?php echo esc_html( taruki_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"td-lede"} -->
<p class="td-lede"><?php echo esc_html( taruki_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-hero__acts","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group td-hero__acts"><!-- wp:paragraph {"className":"td-link td-link--light"} -->
<p class="td-link td-link--light"><a href="/book/"><?php echo esc_html( taruki_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-hero__inset"} -->
<figure class="wp-block-image size-full td-hero__inset"><img src="<?php echo taruki_img( 'img-02.webp' ); ?>" alt="<?php echo taruki_a( 'alt_02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"td-tl-wrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull td-tl-wrap"><!-- wp:group {"align":"wide","className":"td-tl","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide td-tl"><!-- wp:paragraph {"className":"td-tl__title td-caps td-caps--light"} -->
<p class="td-tl__title td-caps td-caps--light"><?php echo esc_html( taruki_t( 'tl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"td-tl__steps","layout":{"type":"default"}} -->
<div class="wp-block-group td-tl__steps"><!-- wp:paragraph {"className":"td-tl__i"} -->
<p class="td-tl__i"><?php echo esc_html( taruki_t( 'st_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-tl__i"} -->
<p class="td-tl__i"><?php echo esc_html( taruki_t( 'st_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-tl__i"} -->
<p class="td-tl__i"><?php echo esc_html( taruki_t( 'st_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-tl__i is-current"} -->
<p class="td-tl__i is-current"><?php echo esc_html( taruki_t( 'st_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-tl__i"} -->
<p class="td-tl__i"><?php echo esc_html( taruki_t( 'st_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-tl__i"} -->
<p class="td-tl__i"><?php echo esc_html( taruki_t( 'st_6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
