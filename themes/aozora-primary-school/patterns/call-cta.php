<?php
/**
 * Title: Contact the school
 * Slug: aozora-primary-school/call-cta
 * Categories: aozora-primary-school
 * Keywords: contact, call to action
 * Viewport Width: 1440
 * Description: A short invitation to visit or write to the office, beside a photograph of the school library.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-section ap-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-section ap-section--last"><!-- wp:group {"align":"wide","className":"ap-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-cta__photo"} -->
<figure class="wp-block-image size-large ap-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/library.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ap-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group ap-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ap-cta__title"} -->
<h2 class="wp-block-heading ap-cta__title"><?php echo wp_kses_post( aozora_primary_school_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( aozora_primary_school_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( aozora_primary_school_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:+442079460811">+44 20 7946 0811</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
