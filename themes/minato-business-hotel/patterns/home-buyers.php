<?php
/**
 * Title: Home: company stays band
 * Slug: minato-business-hotel/home-buyers
 * Categories: minato-business-hotel
 * Keywords: business, company, regular guests
 * Viewport Width: 1440
 * Description: A warm charcoal band with a photograph of a twin room, a paragraph and a regular guest's words.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-band mb-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-band mb-band--slate"><!-- wp:group {"align":"wide","className":"mb-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--land"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-twin.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'home_buyers_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-split__title"} -->
<h2 class="wp-block-heading mb-split__title"><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/business/"><?php echo wp_kses_post( minato_business_hotel_t( 'home_buyers_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
