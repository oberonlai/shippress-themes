<?php
/**
 * Title: Template: product care note
 * Slug: itomaki-yarn/tpl-product-note
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Inserter: no
 * Description: The spool and dye-lot note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "iy-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-product-note"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "iy-product-note__more"} -->
<p class="iy-product-note__more"><a href="/contact/"><?php echo esc_html( itomaki_yarn_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
