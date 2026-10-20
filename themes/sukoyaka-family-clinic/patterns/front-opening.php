<?php
/**
 * Title: Home: quiet first screen with the waiting room and the opening hours
 * Slug: sukoyaka-family-clinic/front-opening
 * Categories: sukoyaka-family-clinic
 * Keywords: home, clinic
 * Viewport Width: 1440
 * Description: Text on the left, a tall daylight photograph of the waiting room on the right, and one slim line of opening hours under both.
 */
?>
<!-- wp:group {"tagName":"section","className":"sf-open","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-open"><!-- wp:group {"className":"sf-open__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-open__grid"><!-- wp:group {"className":"sf-open__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-open__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_01' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sf-open__title"} -->
<h1 class="wp-block-heading sf-open__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_02' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_04' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/your-visit/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_05' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-open__photo"} -->
<figure class="wp-block-image size-large sf-open__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting-room.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_opening_06' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"sf-open__hours","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-open__hours"><!-- wp:list {"className":"sf-hoursline"} -->
<ul class="wp-block-list sf-hoursline"><!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_07' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_08' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_09' ) ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_opening_10' ) ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
