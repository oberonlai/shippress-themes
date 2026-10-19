<?php
/**
 * Title: Header: Apply now button
 * Slug: tsutsumi-packaging/head-cta
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"tp-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group tp-head__cta"><!-- wp:paragraph {"className":"tp-head__status"} -->
<p class="tp-head__status"><?php echo esc_html( tsutsumi_packaging_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "tp-book"} -->
<div class="wp-block-button tp-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( tsutsumi_packaging_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
