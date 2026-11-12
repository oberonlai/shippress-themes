<?php
/**
 * Title: Header bar
 * Slug: teisha-parking/head-bar
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"tp-bar","layout":{"type":"default"}} -->
<div class="wp-block-group tp-bar"><!-- wp:site-title {"level":0,"className":"tp-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"tp-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"tp-bar__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tp-bar__cta"><!-- wp:button {"className":"tp-pill tp-pill--solid"} -->
<div class="wp-block-button tp-pill tp-pill--solid"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#apply' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
