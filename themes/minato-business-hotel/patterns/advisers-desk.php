<?php
/**
 * Title: People: the front desk
 * Slug: minato-business-hotel/advisers-desk
 * Categories: minato-business-hotel
 * Keywords: desk, hours
 * Viewport Width: 1440
 * Description: The front desk with check-in times, beside a photograph of the lobby.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-band mb-band--slate mb-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-band mb-band--slate mb-section--last-band"><!-- wp:group {"align":"wide","className":"mb-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--land"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby-front-desk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'advisers_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-split__title"} -->
<h2 class="wp-block-heading mb-split__title"><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'advisers_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
