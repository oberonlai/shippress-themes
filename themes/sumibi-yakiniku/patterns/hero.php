<?php
/**
 * Title: Hero: window with docked plate
 * Slug: sumibi-yakiniku/hero
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: First screen in two halves: a blush gutter and a low-key photograph window cut at 6 degrees with four cross-fading table scenes, a docked white plate holding 17:00, four dots and a rotated label; the headline and lede sit in the blush lower half.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-hero","layout":{"type":"default"}} -->
<section class="wp-block-group sy-hero"><!-- wp:group {"className":"sy-hero__win","layout":{"type":"default"}} -->
<div class="wp-block-group sy-hero__win"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sy-slide sy-slide--1"} -->
<figure class="wp-block-image size-full sy-slide sy-slide--1"><img src="<?php echo sumibi_yakiniku_img( 'p01-table-grill.webp' ); ?>" alt="<?php echo sumibi_yakiniku_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<figure class="sy-slide sy-slide--2" aria-hidden="true"><img src="<?php echo sumibi_yakiniku_img( 'p02-tongs-turn.webp' ); ?>" alt="" loading="lazy"/></figure>
<figure class="sy-slide sy-slide--3" aria-hidden="true"><img src="<?php echo sumibi_yakiniku_img( 'p03-group-toast.webp' ); ?>" alt="" loading="lazy"/></figure>
<figure class="sy-slide sy-slide--4" aria-hidden="true"><img src="<?php echo sumibi_yakiniku_img( 'p04-coals-basket.webp' ); ?>" alt="" loading="lazy"/></figure>
<div class="sy-scrim" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-plate sy-plate--hero","layout":{"type":"default"}} -->
<div class="wp-block-group sy-plate sy-plate--hero"><!-- wp:paragraph {"className":"sy-plate__n"} -->
<p class="sy-plate__n"><?php echo esc_html( sumibi_yakiniku_t( 'hero_plate_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-plate__l"} -->
<p class="sy-plate__l"><?php echo esc_html( sumibi_yakiniku_t( 'hero_plate_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sy-dots" aria-hidden="true"><i></i><i></i><i></i><i></i></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sy-label sy-label--hero"} -->
<p class="sy-label sy-label--hero"><?php echo esc_html( sumibi_yakiniku_t( 'hero_side' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sy-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sy-hero__copy"><!-- wp:heading {"level":1,"className":"sy-hero__h1"} -->
<h1 class="wp-block-heading sy-hero__h1"><?php echo esc_html( sumibi_yakiniku_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sy-hero__lede"} -->
<p class="sy-hero__lede"><?php echo esc_html( sumibi_yakiniku_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sy-hero__facts","layout":{"type":"default"}} -->
<div class="wp-block-group sy-hero__facts"><!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'hero_f1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'hero_f2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'hero_f3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-hero__link"} -->
<p class="sy-hero__link"><a href="#courses"><?php echo esc_html( sumibi_yakiniku_t( 'hero_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
