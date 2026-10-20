<?php
/**
 * Title: Call to book an appointment
 * Slug: sukoyaka-family-clinic/call-cta
 * Categories: sukoyaka-family-clinic
 * Keywords: booking, call to action
 * Viewport Width: 1440
 * Description: A short call to book an appointment, beside a photograph of the reception desk.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section sf-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section sf-section--last"><!-- wp:group {"align":"wide","className":"sf-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"sf-cta__photo"} -->
<figure class="wp-block-image size-large sf-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/reception.webp' ) ); ?>" alt="<?php echo esc_attr( sukoyaka_family_clinic_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sf-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group sf-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sf-cta__title"} -->
<h2 class="wp-block-heading sf-cta__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960418">01632 960 418</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
