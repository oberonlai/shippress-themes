<?php
/**
 * Title: Home: cover
 * Slug: michi-motors/front-cover
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Full-bleed dimmed front-on car photo, staggered four-line light headline split across the left and right halves, crimson rule with a three-line lead, down-arrow cue and an outline ring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-cover mm-band", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-cover mm-band"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-band__img"} -->
<figure class="wp-block-image size-full mm-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s1b-cover.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_cover_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-cover__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-cover__grid"><!-- wp:heading {"level":1,"className":"mm-t1 mm-t1--cover"} -->
<h1 class="wp-block-heading mm-t1 mm-t1--cover"><span class="mm-t1__l mm-t1__l--1"><?php echo esc_html( michi_motors_t( 'front_cover_2' ) ); ?></span><span class="mm-t1__l mm-t1__l--2"><?php echo esc_html( michi_motors_t( 'front_cover_3' ) ); ?></span><span class="mm-t1__l mm-t1__l--3"><?php echo esc_html( michi_motors_t( 'front_cover_4' ) ); ?></span><span class="mm-t1__l mm-t1__l--4"><?php echo esc_html( michi_motors_t( 'front_cover_9' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-rule-lead mm-cover__lead"} -->
<p class="mm-rule-lead mm-cover__lead"><?php echo esc_html( michi_motors_t( 'front_cover_5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-cue"} -->
<p class="mm-cue"><a href="#forecourt"><span class="mm-cue__arrow">&#8595;</span> <?php echo esc_html( michi_motors_t( 'front_cover_6' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/test-drive/" aria-label="<?php echo esc_attr( michi_motors_t( 'contact_head_2' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
