<?php
/**
 * Title: Home: locations
 * Slug: michi-motors/front-locations
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Three horizontal rows: photo, name, address, hours, phone and a map ring.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-sec mm-sec--mist mm-locations", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-sec--mist mm-locations"><!-- wp:group {"align": "wide", "className": "mm-locations__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-locations__head"><!-- wp:group {"className": "mm-head", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'front_locations_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'front_locations_2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'front_locations_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "mm-locs", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-locs"><!-- wp:group {"className": "mm-loc", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-loc__img"} -->
<figure class="wp-block-image size-full mm-loc__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s5-midtown.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'about_main_10' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-loc__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc__text"><!-- wp:heading {"level":3,"className":"mm-loc__name"} -->
<h3 class="wp-block-heading mm-loc__name"><?php echo esc_html( michi_motors_t( 'front_locations_5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-loc__line"} -->
<p class="mm-loc__line"><?php echo esc_html( michi_motors_t( 'front_locations_6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><?php echo esc_html( michi_motors_t( 'front_locations_7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><a href="tel:9165550187">(916) 555-0187</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink"} -->
<p class="mm-ringlink"><a href="https://www.openstreetmap.org/search?query=2140+J+Street+Sacramento" aria-label="<?php echo esc_attr( michi_motors_t( 'front_locations_4' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mm-loc", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-loc__img"} -->
<figure class="wp-block-image size-full mm-loc__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s6-davis.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_locations_8' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-loc__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc__text"><!-- wp:heading {"level":3,"className":"mm-loc__name"} -->
<h3 class="wp-block-heading mm-loc__name"><?php echo esc_html( michi_motors_t( 'contact_main_6' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-loc__line"} -->
<p class="mm-loc__line"><?php echo esc_html( michi_motors_t( 'front_locations_10' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><?php echo esc_html( michi_motors_t( 'front_locations_11' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><a href="tel:5305550142">(530) 555-0142</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink"} -->
<p class="mm-ringlink"><a href="https://www.openstreetmap.org/search?query=815+Olive+Drive+Davis" aria-label="<?php echo esc_attr( michi_motors_t( 'front_locations_9' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mm-loc", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-loc__img"} -->
<figure class="wp-block-image size-full mm-loc__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s7-roseville.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_locations_12' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-loc__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-loc__text"><!-- wp:heading {"level":3,"className":"mm-loc__name"} -->
<h3 class="wp-block-heading mm-loc__name"><?php echo esc_html( michi_motors_t( 'contact_main_8' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-loc__line"} -->
<p class="mm-loc__line"><?php echo esc_html( michi_motors_t( 'front_locations_14' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><?php echo esc_html( michi_motors_t( 'front_locations_7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-loc__line mm-loc__line--m"} -->
<p class="mm-loc__line mm-loc__line--m"><a href="tel:9165550263">(916) 555-0263</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-ringlink"} -->
<p class="mm-ringlink"><a href="https://www.openstreetmap.org/search?query=3300+Eureka+Road+Roseville" aria-label="<?php echo esc_attr( michi_motors_t( 'front_locations_13' ) ); ?>"></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
