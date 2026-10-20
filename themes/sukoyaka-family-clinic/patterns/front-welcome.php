<?php
/**
 * Title: Home: a letter from the founder with two photographs
 * Slug: sukoyaka-family-clinic/front-welcome
 * Categories: sukoyaka-family-clinic
 * Keywords: home, clinic
 * Viewport Width: 1440
 * Description: A narrow column of narrative paragraphs signed by the founder, beside two staggered photographs.
 */
?>
<!-- wp:group {"tagName":"section","className":"sf-fp sf-welcome","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-fp sf-welcome"><!-- wp:group {"className":"sf-fp__in sf-welcome__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-fp__in sf-welcome__in"><!-- wp:group {"className":"sf-welcome__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-welcome__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_02' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_04' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-sign"} -->
<p class="sf-sign"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-welcome__photos","layout":{"type":"default"}} -->
<div class="wp-block-group sf-welcome__photos"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-welcome__big"} -->
<figure class="wp-block-image size-large sf-welcome__big"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/home-visit.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_welcome_07' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-welcome__small"} -->
<figure class="wp-block-image size-large sf-welcome__small"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blood-pressure.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_welcome_08' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"sf-small sf-welcome__cap"} -->
<p class="sf-small sf-welcome__cap"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_welcome_09' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
