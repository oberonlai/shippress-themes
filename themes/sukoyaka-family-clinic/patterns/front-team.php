<?php
/**
 * Title: Home: the two named doctors and the nursing team
 * Slug: sukoyaka-family-clinic/front-team
 * Categories: sukoyaka-family-clinic
 * Keywords: home, clinic
 * Viewport Width: 1440
 * Description: Two tall portraits of the doctors side by side, then one wide photograph of the nurses with a paragraph naming them.
 */
?>
<!-- wp:group {"tagName":"section","className":"sf-fp sf-teamsec","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-fp sf-teamsec"><!-- wp:group {"className":"sf-fp__in sf-teamsec__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-fp__in sf-teamsec__in"><!-- wp:group {"className":"sf-fp__head","layout":{"type":"default"}} -->
<div class="wp-block-group sf-fp__head"><!-- wp:group {"className":"sf-fp__title","layout":{"type":"default"}} -->
<div class="wp-block-group sf-fp__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_02' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sf-fp__lead"} -->
<p class="sf-fp__lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_03' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-docs","layout":{"type":"default"}} -->
<div class="wp-block-group sf-docs"><!-- wp:group {"className":"sf-doc","layout":{"type":"default"}} -->
<div class="wp-block-group sf-doc"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-doc__photo"} -->
<figure class="wp-block-image size-large sf-doc__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doctor-ellen.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_team_04' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"sf-doc__name"} -->
<h3 class="wp-block-heading sf-doc__name"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_05' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sf-doc__role"} -->
<p class="sf-doc__role"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_06' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_07' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-doc sf-doc--b","layout":{"type":"default"}} -->
<div class="wp-block-group sf-doc sf-doc--b"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-doc__photo"} -->
<figure class="wp-block-image size-large sf-doc__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doctor-tomas.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_team_08' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3,"className":"sf-doc__name"} -->
<h3 class="wp-block-heading sf-doc__name"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_09' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sf-doc__role"} -->
<p class="sf-doc__role"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_10' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_11' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-nurses","layout":{"type":"default"}} -->
<div class="wp-block-group sf-nurses"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-nurses__photo"} -->
<figure class="wp-block-image size-large sf-nurses__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/nurse-team.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_team_12' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sf-nurses__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-nurses__text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_13' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_14' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/team/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_team_15' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
