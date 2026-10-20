<?php
/**
 * Title: Home: the road at first light (full bleed)
 * Slug: hokuto-driving-school/home-opening
 * Categories: hokuto-driving-school
 * Keywords: home, hero, road
 * Viewport Width: 1440
 * Description: A full-bleed photograph of an empty early-morning road with the headline, a short paragraph, two links and a quiet facts bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-hero__picture"} -->
<figure class="wp-block-image size-large hk-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-road.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"hk-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-hero__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-hero__title"} -->
<h1 class="wp-block-heading hk-hero__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hokuto_driving_school_t( 'book_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/the-route/"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group hk-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"hk-facts"} -->
<ul class="wp-block-list hk-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
