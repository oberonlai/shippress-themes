<?php
/**
 * Title: Template: product care note
 * Slug: tsuribito-tackle/tpl-product-note
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Inserter: no
 * Description: The spooling and care note with a link to Visit, on every product page.
 */
?>
<!-- wp:group {"className": "tt-product-note", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-product-note"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'product_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'product_note_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tt-product-note__more"} -->
<p class="tt-product-note__more"><a href="/contact/"><?php echo esc_html( tsuribito_tackle_t( 'shipping' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
