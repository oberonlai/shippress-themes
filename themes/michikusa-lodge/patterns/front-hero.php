<?php
/**
 * Title: Home: framed double-exposure window
 * Slug: michikusa-lodge/front-hero
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Inset photo window holding two film photographs laid over each other, the overlay menu and amber disc on the photo, a booking bar docked on its foot, and the headline below on paper.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-hero","anchor":"top","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull ml-hero"><!-- wp:group {"className":"ml-window-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window-wrap"><!-- wp:group {"className":"ml-window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ml-window sp-parallax"><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-base","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-base"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo michikusa_lodge_img( 'p02-car-under-canopy.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"sp-parallax__layer ml-layer ml-exposure","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ml-layer ml-exposure"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-layer__img"} -->
<figure class="wp-block-image size-full ml-layer__img"><img src="<?php echo michikusa_lodge_img( 'p01-key-on-counter.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:html -->
<svg class="ml-grain" aria-hidden="true" focusable="false" width="100%" height="100%"><filter id="ml-noise"><feTurbulence type="fractalNoise" baseFrequency=".8" numOctaves="2" stitchTiles="stitch"/><feColorMatrix type="saturate" values="0"/></filter><rect width="100%" height="100%" filter="url(#ml-noise)"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"ml-scrim","layout":{"type":"default"}} -->
<div class="wp-block-group ml-scrim"></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-vert","layout":{"type":"default"}} -->
<div class="wp-block-group ml-vert"><!-- wp:paragraph {"className":"ml-vert__t"} -->
<p class="ml-vert__t"><?php echo esc_html( michikusa_lodge_t( 'vert' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"ml-vert__line","layout":{"type":"default"}} -->
<div class="wp-block-group ml-vert__line"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-bookbar","layout":{"type":"default"}} -->
<div class="wp-block-group ml-bookbar"><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-cell","layout":{"type":"default"}} -->
<div class="wp-block-group ml-cell"><!-- wp:paragraph {"className":"ml-cell__l"} -->
<p class="ml-cell__l"><?php echo esc_html( michikusa_lodge_t( 'bar_l4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-cell__v"} -->
<p class="ml-cell__v"><?php echo esc_html( michikusa_lodge_t( 'bar_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-bar-mini","layout":{"type":"default"}} -->
<div class="wp-block-group ml-bar-mini"><!-- wp:paragraph {"className":"ml-bar-mini__t"} -->
<p class="ml-bar-mini__t"><?php echo esc_html( michikusa_lodge_t( 'bar_mini' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ml-bookbtn"} -->
<div class="wp-block-button ml-bookbtn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book-tonight/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-lead","layout":{"type":"default"}} -->
<div class="wp-block-group ml-lead"><!-- wp:heading {"level":1,"className":"ml-hero__h"} -->
<h1 class="wp-block-heading ml-hero__h"><span class="ml-line"><?php echo esc_html( michikusa_lodge_t( 'hero_h1a' ) ); ?></span> <span class="ml-line"><?php echo esc_html( michikusa_lodge_t( 'hero_h1b' ) ); ?></span></h1>
<!-- /wp:heading --><!-- wp:group {"className":"ml-hero__aside","layout":{"type":"default"}} -->
<div class="wp-block-group ml-hero__aside"><!-- wp:paragraph {"className":"ml-hero__p"} -->
<p class="ml-hero__p"><?php echo esc_html( michikusa_lodge_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-hero__more"} -->
<p class="ml-hero__more"><a href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'hero_more' ) ); ?></a></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-hero__night"} -->
<p class="ml-hero__night"><?php echo esc_html( michikusa_lodge_t( 'vert_inline' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
