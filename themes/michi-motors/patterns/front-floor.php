<?php
/**
 * Title: Home: the floor
 * Slug: michi-motors/front-floor
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Steel band with one wide photo and a pull quote naming the sales and service leads.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-sec mm-sec--steel mm-floor", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-sec--steel mm-floor"><!-- wp:group {"align": "wide", "className": "mm-grid mm-floor__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-grid mm-floor__grid"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-floor__img"} -->
<figure class="wp-block-image size-full mm-floor__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s8-floor.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'front_floor_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mm-floor__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-floor__text"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'front_floor_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-pull"} -->
<p class="mm-pull"><?php echo esc_html( michi_motors_t( 'front_floor_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-cite"} -->
<p class="mm-cite"><?php echo esc_html( michi_motors_t( 'front_floor_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-body"} -->
<p class="mm-body"><?php echo esc_html( michi_motors_t( 'front_floor_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-more mm-more--light"} -->
<p class="mm-more mm-more--light"><a href="/team/"><?php echo esc_html( michi_motors_t( 'about_head_2' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
