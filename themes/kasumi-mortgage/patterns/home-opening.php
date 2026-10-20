<?php
/**
 * Title: Home: the kitchen table (photograph above, words below)
 * Slug: kasumi-mortgage/home-opening
 * Categories: kasumi-mortgage
 * Keywords: home, hero, kitchen table
 * Viewport Width: 1440
 * Description: A wide documentary photograph of a couple and an adviser at a kitchen table on the top half, the headline and a short paragraph with two links in two columns below it, then a quiet facts bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-hero__picture"} -->
<figure class="wp-block-image size-large km-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-kitchen-table.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"km-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-hero__copy"><!-- wp:group {"className":"km-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group km-hero__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-hero__title"} -->
<h1 class="wp-block-heading km-hero__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group km-hero__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kasumi_mortgage_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/how-it-works/"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group km-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"km-facts"} -->
<ul class="wp-block-list km-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( kasumi_mortgage_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
