<?php
/**
 * Title: Home: a letter from the founder
 * Slug: minato-business-hotel/home-welcome
 * Categories: minato-business-hotel
 * Keywords: about, story, welcome
 * Viewport Width: 1440
 * Description: Two narrative paragraphs from the general manager beside a photograph of the lobby.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section"><!-- wp:group {"align":"wide","className":"mb-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-split__photo mb-split__photo--tall"} -->
<figure class="wp-block-image size-large mb-split__photo mb-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby-front-desk.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"mb-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group mb-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mb-split__title"} -->
<h2 class="wp-block-heading mb-split__title"><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-sign"} -->
<p class="mb-sign"><?php echo wp_kses_post( minato_business_hotel_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
