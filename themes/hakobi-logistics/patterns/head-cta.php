<?php
/**
 * Title: Header: Get a quote button
 * Slug: hakobi-logistics/head-cta
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Get a quote button in the header, before the menu button.
 */
?>
<!-- wp:buttons {"className": "hg-head__cta"} -->
<div class="wp-block-buttons hg-head__cta"><!-- wp:button {"className": "hg-book"} -->
<div class="wp-block-button hg-book"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( hakobi_logistics_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
