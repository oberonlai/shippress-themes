<?php
/**
 * Title: Template: product care note
 * Slug: karan-geta/tpl-product-note
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Inserter: no
 * Description: The spooling and care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "kg-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-product-note"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kg-product-note__more"} -->
<p class="kg-product-note__more"><a href="/contact/"><?php echo esc_html( karan_geta_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
