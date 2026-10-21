<?php
/**
 * Title: Home: service bay
 * Slug: michi-motors/front-service
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Full-bleed dimmed service bay with a staggered heading, rule lead and ring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-band mm-service", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-service"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-band__img"} -->
<figure class="wp-block-image size-full mm-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s4-service.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_service_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-band__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:heading {"level":2,"className":"mm-t1 mm-t1--band"} -->
<h2 class="wp-block-heading mm-t1 mm-t1--band"><span class="mm-t1__l mm-t1__l--1"><?php echo esc_html( michi_motors_t( 'front_service_3' ) ); ?></span><span class="mm-t1__l mm-t1__l--2"><?php echo esc_html( michi_motors_t( 'front_service_4' ) ); ?></span></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mm-band__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'front_service_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-rule-lead"} -->
<p class="mm-rule-lead"><?php echo esc_html( michi_motors_t( 'front_service_6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink mm-ringlink--corner"} -->
<p class="mm-ringlink mm-ringlink--corner"><a href="/service/" aria-label="<?php echo esc_attr( michi_motors_t( 'front_service_2' ) ); ?>"></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
