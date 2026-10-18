<?php
/**
 * Title: Header: Arrange a visit button
 * Slug: hidamari-care/head-cta
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Arrange a visit button in the header, before the menu button.
 */
?>
<!-- wp:buttons {"className": "hc-head__cta"} -->
<div class="wp-block-buttons hc-head__cta"><!-- wp:button {"className": "hc-book"} -->
<div class="wp-block-button hc-book"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( hidamari_care_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
