<?php
/**
 * Title: Call to request a quotation
 * Slug: hagane-machinery/call-cta
 * Categories: hagane-machinery
 * Keywords: quotation, call to action
 * Viewport Width: 1440
 * Description: A short call to request a quotation, beside a photograph of finished machined parts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-section--last"><!-- wp:group {"align":"wide","className":"hm-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hm-cta__photo"} -->
<figure class="wp-block-image size-large hm-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/parts-tray.webp' ) ); ?>" alt="<?php echo esc_attr( hagane_machinery_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hm-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hm-cta__title"} -->
<h2 class="wp-block-heading hm-cta__title"><?php echo wp_kses_post( hagane_machinery_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hagane_machinery_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( hagane_machinery_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960275">01632 960 275</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
