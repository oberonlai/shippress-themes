<?php
/**
 * Title: Vaccinations and checks: page head
 * Slug: sukoyaka-family-clinic/rates-head
 * Categories: sukoyaka-family-clinic
 * Keywords: vaccinations, checks
 * Viewport Width: 1440
 * Description: Title and paragraph beside a photograph of a nurse with a patient.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head sf-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head sf-head--photo"><!-- wp:group {"align":"wide","className":"sf-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-head__grid"><!-- wp:group {"className":"sf-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'home_steps_20' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-head__title"} -->
<h1 class="wp-block-heading sf-head__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'rates_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'rates_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide sf-head__photo"} -->
<figure class="wp-block-image size-large alignwide sf-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/health-check.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'home_steps_19' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
