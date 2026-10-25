<?php
/**
 * Title: Home: trial call to action
 * Slug: shirota-laundry/front-close
 * Categories: shirota-laundry
 * Keywords: laundry, linen, hotel, clinic
 * Viewport Width: 1440
 * Description: Soft grey band with the trial-week call to action and a small oval photo.
 */
?>
<!-- wp:group {"className":"sl-sec sl-sec--cta","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull sl-sec sl-sec--cta"><!-- wp:group {"className":"sl-cta","layout":{"type":"default"}} -->
<div class="wp-block-group sl-cta"><!-- wp:group {"className":"sl-cta__t","layout":{"type":"default"}} -->
<div class="wp-block-group sl-cta__t"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( shirota_laundry_t( 'kcdc0f2f9' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shirota_laundry_t( 'k7527cde5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sl-pills sp-stagger"} -->
<div class="wp-block-buttons sl-pills sp-stagger"><!-- wp:button {"className":"sl-pill sl-pill--ink sp-reveal sp-reveal--left"} -->
<div class="wp-block-button sl-pill sl-pill--ink sp-reveal sp-reveal--left"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( shirota_laundry_t( 'ka2265aab' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"sl-pill is-style-outline-pill sp-reveal sp-reveal--left"} -->
<div class="wp-block-button sl-pill is-style-outline-pill sp-reveal sp-reveal--left"><a class="wp-block-button__link wp-element-button" href="tel:+002148701987"><?php echo wp_kses_post( shirota_laundry_t( 'k95f63144' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-oval sl-oval--small","layout":{"type":"default"}} -->
<div class="wp-block-group sl-oval sl-oval--small"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hem-check.webp' ) ); ?>" alt="<?php echo esc_attr( shirota_laundry_t( 'a1f72a1d7' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
