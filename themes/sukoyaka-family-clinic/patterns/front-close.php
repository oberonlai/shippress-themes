<?php
/**
 * Title: Home: how to find the clinic
 * Slug: sukoyaka-family-clinic/front-close
 * Categories: sukoyaka-family-clinic
 * Keywords: home, clinic
 * Viewport Width: 1440
 * Description: A photograph of the clinic building beside the address, access notes and the booking button.
 */
?>
<!-- wp:group {"tagName":"section","className":"sf-fp sf-close","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-fp sf-close"><!-- wp:group {"className":"sf-fp__in sf-close__in","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-fp__in sf-close__in"><!-- wp:group {"className":"sf-find__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sf-find__grid"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-find__photo"} -->
<figure class="wp-block-image size-large sf-find__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/clinic-exterior.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'front_find_01' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"sf-find__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sf-find__copy"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_03' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_04' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sf-small"} -->
<p class="sf-small"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_05' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_06' ) ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/about/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'front_find_07' ) ); ?></a></div>
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
