<?php
/**
 * Title: Home: the walk from the station (a wide photograph and walking minutes)
 * Slug: minato-business-hotel/front-walk
 * Categories: minato-business-hotel
 * Keywords: location, walk, station, map
 * Viewport Width: 1440
 * Description: A wide photograph of the street from the station, then the walking minutes to six places as a ruled list beside a short paragraph about the neighbourhood.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-walk mb-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-walk mb-band"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-walk__photo alignwide"} -->
<figure class="wp-block-image size-large mb-walk__photo alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/station-walk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_walk_alt' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_cap' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"mb-walk__body","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-walk__body"><!-- wp:group {"className":"mb-walk__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-walk__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list {"className":"mb-walk__list"} -->
<ul class="wp-block-list mb-walk__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_01' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_02' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_walk_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
