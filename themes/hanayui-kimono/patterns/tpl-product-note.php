<?php
/**
 * Title: Template: product care note
 * Slug: hanayui-kimono/tpl-product-note
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The spooling and care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "hy-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-product-note"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hy-product-note__more"} -->
<p class="hy-product-note__more"><a href="/contact/"><?php echo esc_html( hanayui_kimono_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
