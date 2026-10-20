<?php
/**
 * Title: Call to book a first call
 * Slug: kasumi-mortgage/call-cta
 * Categories: kasumi-mortgage
 * Keywords: booking, call to action
 * Viewport Width: 1440
 * Description: A short call to book with the office telephone, beside a photograph of a signature on a document.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-section--last"><!-- wp:group {"align":"wide","className":"km-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"km-cta__photo"} -->
<figure class="wp-block-image size-large km-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/signing-papers.webp' ) ); ?>" alt="<?php echo esc_attr( kasumi_mortgage_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"km-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-cta__title"} -->
<h2 class="wp-block-heading km-cta__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kasumi_mortgage_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:01632960275">01632 960 275</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
