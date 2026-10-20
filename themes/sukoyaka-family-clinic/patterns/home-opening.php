<?php
/**
 * Title: Home: the waiting room (photograph, words below)
 * Slug: sukoyaka-family-clinic/home-opening
 * Categories: sukoyaka-family-clinic
 * Keywords: home, hero, waiting room
 * Viewport Width: 1440
 * Description: A photograph of the waiting room, the headline and a short paragraph with a link below it, then a quiet info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-hero"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-hero__picture"} -->
<figure class="wp-block-image size-large sf-hero__picture"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting-room.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'home_opening_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","className":"sf-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-hero__copy"><!-- wp:group {"className":"sf-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group sf-hero__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-hero__title"} -->
<h1 class="wp-block-heading sf-hero__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_03' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group sf-hero__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_05' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-hero__bar","layout":{"type":"constrained"}} -->
<div class="wp-block-group sf-hero__bar"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:list {"className":"sf-facts"} -->
<ul class="wp-block-list sf-facts"><!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_06' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_07' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_08' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_opening_09' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
