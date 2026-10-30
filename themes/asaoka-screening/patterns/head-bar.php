<?php
/**
 * Title: Header: bar
 * Slug: asaoka-screening/head-bar
 * Categories: asaoka-screening
 * Keywords: health screening, medical, company
 * Viewport Width: 1440
 * Description: Plain top bar: square-dot wordmark, menu and the coral reservation pill.
 */
?>
<!-- wp:group {"className":"as-bar","layout":{"type":"default"}} -->
<div class="wp-block-group as-bar"><!-- wp:site-title {"level":0,"isLink":true,"className":"as-mark"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"as-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<div class="wp-block-buttons as-head__cta"><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/#dates"><span class="as-btn-long"><?php echo esc_html( asaoka_screening_t( 'cta' ) ); ?></span><span class="as-btn-short"><?php echo esc_html( asaoka_screening_t( 'cta_short' ) ); ?></span></a></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
