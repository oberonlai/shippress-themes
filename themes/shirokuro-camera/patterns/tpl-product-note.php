<?php
/**
 * Title: Template: product care note
 * Slug: shirokuro-camera/tpl-product-note
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Inserter: no
 * Description: The care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "sc-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-product-note"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sc-product-note__more"} -->
<p class="sc-product-note__more"><a href="/contact/"><?php echo esc_html( shirokuro_camera_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
