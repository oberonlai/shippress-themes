<?php
/**
 * Title: Call to reserve a room
 * Slug: minato-business-hotel/call-cta
 * Categories: minato-business-hotel
 * Keywords: booking, call to action
 * Viewport Width: 1440
 * Description: A short call to book with the desk telephone, beside a photograph of a key card changing hands.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-section--last"><!-- wp:group {"align":"wide","className":"mb-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-cta__photo"} -->
<figure class="wp-block-image size-large mb-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/key-card-hand.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-cta__title"} -->
<h2 class="wp-block-heading mb-cta__title"><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960275">01632 960 275</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
