<?php
/**
 * Title: Header: Book a first meeting button
 * Slug: kakei-advisors/head-cta
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Book a first meeting button in the header, before the menu button.
 */
?>
<!-- wp:buttons {"className": "ka-head__cta"} -->
<div class="wp-block-buttons ka-head__cta"><!-- wp:button {"className": "ka-book"} -->
<div class="wp-block-button ka-book"><a class="wp-block-button__link wp-element-button" href="/meeting/"><?php echo esc_html( kakei_advisors_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
