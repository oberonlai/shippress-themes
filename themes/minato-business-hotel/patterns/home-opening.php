<?php
/**
 * Title: Home: the room at first light (full-bleed photograph, words below)
 * Slug: minato-business-hotel/home-opening
 * Categories: minato-business-hotel
 * Keywords: home, hero, room
 * Viewport Width: 1440
 * Description: A full-bleed high-key photograph of a quiet hotel room at first light, the headline and a short paragraph with two links in two columns below it, then a quiet info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-hero__picture"} -->
<figure class="wp-block-image size-large mb-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-room-morning.webp' ) ); ?>" alt="<?php echo esc_attr( minato_business_hotel_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"mb-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-hero__copy"><!-- wp:group {"className":"mb-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-hero__title"} -->
<h1 class="wp-block-heading mb-hero__title"><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group mb-hero__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( minato_business_hotel_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group mb-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"mb-facts"} -->
<ul class="wp-block-list mb-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
