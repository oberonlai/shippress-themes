<?php
/**
 * Title: Header: Apply now button
 * Slug: tanba-law/head-cta
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Inserter: no
 * Description: The service status line and the Book a consultation button in the header.
 */
?>
<!-- wp:group {"className":"tb-head__cta","layout":{"type":"default"}} -->
<div class="wp-block-group tb-head__cta"><!-- wp:paragraph {"className":"tb-head__status"} -->
<p class="tb-head__status"><?php echo esc_html( tanba_law_t( 'head_status' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className": "tb-book"} -->
<div class="wp-block-button tb-book"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( tanba_law_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
