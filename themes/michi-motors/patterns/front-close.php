<?php
/**
 * Title: Home: test drive
 * Slug: michi-motors/front-close
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Full-bleed dimmed road photo, staggered three-line heading, phone and ring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-band mm-close", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-close"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-band__img"} -->
<figure class="wp-block-image size-full mm-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s10-road.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_close_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-band__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:heading {"level":2,"className":"mm-t1 mm-t1--band mm-t1--close"} -->
<h2 class="wp-block-heading mm-t1 mm-t1--band mm-t1--close"><span class="mm-t1__l mm-t1__l--1"><?php echo esc_html( michi_motors_t( 'drive_head_3' ) ); ?></span><span class="mm-t1__l mm-t1__l--2"><?php echo esc_html( michi_motors_t( 'front_close_2' ) ); ?></span><span class="mm-t1__l mm-t1__l--3"><?php echo esc_html( michi_motors_t( 'front_close_3' ) ); ?></span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mm-band__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'drive_head_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-rule-lead"} -->
<p class="mm-rule-lead"><?php echo esc_html( michi_motors_t( 'drive_head_6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-close__tel"} -->
<p class="mm-close__tel"><a href="tel:+19165550187">(916) 555-0187</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/test-drive/" aria-label="<?php echo esc_attr( michi_motors_t( 'contact_head_2' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
