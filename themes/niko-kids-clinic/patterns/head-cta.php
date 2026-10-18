<?php
/**
 * Title: Header: Book a visit button
 * Slug: niko-kids-clinic/head-cta
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Book a visit button in the header, before the menu button.
 */
?>
<!-- wp:buttons {"className": "nk-head__cta"} -->
<div class="wp-block-buttons nk-head__cta"><!-- wp:button {"className": "nk-book"} -->
<div class="wp-block-button nk-book"><a class="wp-block-button__link wp-element-button" href="/booking/"><?php echo esc_html( niko_kids_clinic_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
