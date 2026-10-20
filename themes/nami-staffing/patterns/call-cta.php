<?php
/**
 * Title: Contact us
 * Slug: nami-staffing/call-cta
 * Categories: nami-staffing
 * Keywords: contact, call to action
 * Viewport Width: 1440
 * Description: A short invitation to call or write to the office, beside a photograph of the reception.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-section ns-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-section ns-section--last"><!-- wp:group {"align":"wide","className":"ns-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ns-cta__photo"} -->
<figure class="wp-block-image size-large ns-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ns-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group ns-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ns-cta__title"} -->
<h2 class="wp-block-heading ns-cta__title"><?php echo wp_kses_post( nami_staffing_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( nami_staffing_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:+441174960412">+44 117 496 0412</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
