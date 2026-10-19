<?php
/**
 * Title: Header: Apply now button
 * Slug: asahi-gakuen/head-cta
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"ag-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group ag-head__cta"><!-- wp:paragraph {"className":"ag-head__status"} -->
<p class="ag-head__status"><?php echo esc_html( asahi_gakuen_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "ag-book"} -->
<div class="wp-block-button ag-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( asahi_gakuen_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
