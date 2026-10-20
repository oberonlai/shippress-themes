<?php
/**
 * Title: Contact us
 * Slug: kagi-security/call-cta
 * Categories: kagi-security
 * Keywords: contact, call to action
 * Viewport Width: 1440
 * Description: A short invitation to call or write to the office, beside a photograph of a desk.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--last"><!-- wp:group {"align":"wide","className":"ks-cta","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-cta"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ks-cta__photo"} -->
<figure class="wp-block-image size-large ks-cta__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-detail.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'call_cta_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-cta__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-cta__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'call_cta_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-cta__title"} -->
<h2 class="wp-block-heading ks-cta__title"><?php echo wp_kses_post( kagi_security_t( 'call_cta_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'call_cta_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( kagi_security_t( 'call_cta_02' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="tel:+441174960412">+44 117 496 0412</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
