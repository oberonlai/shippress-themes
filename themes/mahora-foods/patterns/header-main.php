<?php
/**
 * Title: Header: split menu and pill
 * Slug: mahora-foods/header-main
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Inserter: no
 * Viewport Width: 1440
 * Description: Wordmark centred between a split menu, one filled orange pill.
 */
?>
<!-- wp:group {"align": "full", "className": "mf-header", "layout": {"type": "default"}} -->
<div class="wp-block-group alignfull mf-header"><!-- wp:group {"className": "mf-head", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-head"><!-- wp:site-title {"level":0,"className":"mf-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mf-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "mf-pill"} -->
<div class="wp-block-button mf-pill"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( mahora_foods_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
