<?php
/**
 * Title: Header: overlay menu, wordmark and the square booking button
 * Slug: shitsurae-interiors/header-main
 * Categories: shitsurae-interiors
 * Viewport Width: 1440
 * Description: Transparent header floating over the first photograph: wordmark, the one top menu in small caps and a solid square booking button.
 */
?>
<!-- wp:group {"className":"si-head","layout":{"type":"default"}} -->
<div class="wp-block-group si-head"><!-- wp:paragraph {"className":"si-wordmark"} -->
<p class="si-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( shitsurae_interiors_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"si-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:paragraph {"className":"si-cta"} -->
<p class="si-cta"><a href="<?php echo esc_url( home_url( '/consultation/' ) ); ?>"><span class="si-cta__long"><?php echo esc_html( shitsurae_interiors_t( 'cta' ) ); ?></span><span class="si-cta__short"><?php echo esc_html( shitsurae_interiors_t( 'cta_short' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
