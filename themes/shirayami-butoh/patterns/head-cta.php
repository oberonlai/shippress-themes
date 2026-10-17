<?php
/**
 * Title: Header: Book a seat button
 * Slug: shirayami-butoh/head-cta
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Book a seat button at the right end of the header.
 */
?>
<!-- wp:buttons {"className": "sb-head__cta"} -->
<div class="wp-block-buttons sb-head__cta"><!-- wp:button {"className": "sb-book"} -->
<div class="wp-block-button sb-book"><a class="wp-block-button__link wp-element-button" href="/seats/"><?php echo esc_html( shirayami_butoh_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
