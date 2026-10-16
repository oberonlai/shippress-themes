<?php
/**
 * Title: Template: product care note
 * Slug: urushi-nuri/tpl-product-note
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Inserter: no
 * Description: The spooling and care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "un-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group un-product-note"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "un-product-note__more"} -->
<p class="un-product-note__more"><a href="/contact/"><?php echo esc_html( urushi_nuri_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
