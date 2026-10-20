<?php
/**
 * Title: Business stays: for company guests
 * Slug: minato-business-hotel/rates-examiners
 * Categories: minato-business-hotel
 * Keywords: company, account, cancellation
 * Viewport Width: 1440
 * Description: Five ruled lines on what company guests get and a paragraph on changed plans, beside a harbour photograph.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-band mb-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-band mb-section--last-band"><!-- wp:group {"align":"wide","className":"mb-split mb-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split mb-split--top"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--tall"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour-evening.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'rates_examiners_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled"} -->
<ul class="wp-block-list is-style-ruled"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_07' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_08' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'rates_examiners_09' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
