<?php
/**
 * Title: Header: Apply now button
 * Slug: tsunagu-systems/head-cta
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"ts-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group ts-head__cta"><!-- wp:paragraph {"className":"ts-head__status"} -->
<p class="ts-head__status"><?php echo esc_html( tsunagu_systems_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "ts-book"} -->
<div class="wp-block-button ts-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( tsunagu_systems_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
