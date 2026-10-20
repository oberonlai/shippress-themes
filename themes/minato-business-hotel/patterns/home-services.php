<?php
/**
 * Title: Home: what we arrange and what it costs
 * Slug: minato-business-hotel/home-services
 * Categories: minato-business-hotel
 * Keywords: rooms, prices
 * Viewport Width: 1440
 * Description: A paragraph on prices and four plain room lines beside a photograph of breakfast.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section"><!-- wp:group {"align":"wide","className":"mb-split mb-split--flip mb-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split mb-split--flip mb-split--top"><!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'services_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-split__title"} -->
<h2 class="wp-block-heading mb-split__title"><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled mb-prices"} -->
<ul class="wp-block-list is-style-ruled mb-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--wide"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breakfast-plate.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'services_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( minato_business_hotel_t( 'home_services_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
