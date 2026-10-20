<?php
/**
 * Title: Home: the machining hall (full-bleed photograph, words below)
 * Slug: hagane-machinery/home-opening
 * Categories: hagane-machinery
 * Keywords: home, hero, plant
 * Viewport Width: 1440
 * Description: A full-bleed photograph of the machining hall, the headline and a short paragraph with two links in two columns below it, then a quiet info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-hero__picture"} -->
<figure class="wp-block-image size-large hm-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-plant.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"hm-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-hero__copy"><!-- wp:group {"className":"hm-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group hm-hero__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-hero__title"} -->
<h1 class="wp-block-heading hm-hero__title"><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group hm-hero__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hagane_machinery_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/machines/"><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group hm-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"hm-facts"} -->
<ul class="wp-block-list hm-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hagane_machinery_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
