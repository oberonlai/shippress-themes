<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: shirota-laundry/header-main
 * Categories: shirota-laundry
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"sl-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sl-header"><!-- wp:group {"className":"sl-brand","layout":{"type":"default"}} -->
<div class="wp-block-group sl-brand"><!-- wp:site-title {"level":0,"className":"sl-brand__title"} /-->

<!-- wp:paragraph {"className":"sl-brand__sub"} -->
<p class="sl-brand__sub"><?php echo wp_kses_post( shirota_laundry_t( 'k7e2237e1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sl-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:buttons {"className":"sl-pairs","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-buttons sl-pairs"><!-- wp:button {"className":"sl-pair sl-pair--ink"} -->
<div class="wp-block-button sl-pair sl-pair--ink"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( shirota_laundry_t( 'ka328c396' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"sl-pair sl-pair--line is-style-outline-pill"} -->
<div class="wp-block-button sl-pair sl-pair--line is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/rates/"><?php echo wp_kses_post( shirota_laundry_t( 'k62fd280c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
