<?php
/**
 * Title: Home: four rooms side by side
 * Slug: minato-business-hotel/front-rooms
 * Categories: minato-business-hotel
 * Keywords: rooms, rates
 * Viewport Width: 1440
 * Description: The four room types as four cards side by side, each with a photograph, a line on who it suits and a short list of size, desk, view and price from.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-rooms-front","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-rooms-front"><!-- wp:group {"align":"wide","className":"mb-rooms-front__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-rooms-front__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-rooms-front__lead"} -->
<p class="mb-rooms-front__lead"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mb-rooms-front__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-rooms-front__grid"><!-- wp:group {"className":"mb-roomcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-roomcard"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-roomcard__photo"} -->
<figure class="wp-block-image size-large mb-roomcard__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-desk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_rooms_01_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"mb-roomcard__name"} -->
<h3 class="wp-block-heading mb-roomcard__name"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-roomcard__size"} -->
<p class="mb-roomcard__size"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_size' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-roomcard__text"} -->
<p class="mb-roomcard__text"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-roomcard__specs"} -->
<ul class="wp-block-list mb-roomcard__specs"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_spec1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_spec2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_01_price' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-roomcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-roomcard"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-roomcard__photo"} -->
<figure class="wp-block-image size-large mb-roomcard__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-room-morning.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_rooms_02_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"mb-roomcard__name"} -->
<h3 class="wp-block-heading mb-roomcard__name"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-roomcard__size"} -->
<p class="mb-roomcard__size"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_size' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-roomcard__text"} -->
<p class="mb-roomcard__text"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-roomcard__specs"} -->
<ul class="wp-block-list mb-roomcard__specs"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_spec1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_spec2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_02_price' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-roomcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-roomcard"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-roomcard__photo"} -->
<figure class="wp-block-image size-large mb-roomcard__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-twin.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_rooms_03_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"mb-roomcard__name"} -->
<h3 class="wp-block-heading mb-roomcard__name"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-roomcard__size"} -->
<p class="mb-roomcard__size"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_size' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-roomcard__text"} -->
<p class="mb-roomcard__text"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-roomcard__specs"} -->
<ul class="wp-block-list mb-roomcard__specs"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_spec1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_spec2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_03_price' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-roomcard","layout":{"type":"default"}} -->
<div class="wp-block-group mb-roomcard"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-roomcard__photo"} -->
<figure class="wp-block-image size-large mb-roomcard__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/corner-studio.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'front_rooms_04_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"className":"mb-roomcard__name"} -->
<h3 class="wp-block-heading mb-roomcard__name"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mb-roomcard__size"} -->
<p class="mb-roomcard__size"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_size' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-roomcard__text"} -->
<p class="mb-roomcard__text"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"mb-roomcard__specs"} -->
<ul class="wp-block-list mb-roomcard__specs"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_spec1' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_spec2' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_04_price' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mb-after","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-after"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo wp_kses_post( minato_business_hotel_t( 'front_rooms_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
