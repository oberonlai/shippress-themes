<?php
/**
 * Title: Template: product care note
 * Slug: amime-takezaiku/tpl-product-note
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Inserter: no
 * Description: The care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "tk-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-product-note"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tk-product-note__more"} -->
<p class="tk-product-note__more"><a href="/contact/"><?php echo esc_html( amime_takezaiku_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
