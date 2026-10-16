<?php
/**
 * Title: Join: page head
 * Slug: taiko-juku/contact-head
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: The Edo-purple page head of Join.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-pagehead"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'contact_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tj-pagehead__title"} -->
<h1 class="wp-block-heading tj-pagehead__title"><?php echo esc_html( taiko_juku_t( 'contact_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-pagehead__lead"} -->
<p class="tj-pagehead__lead"><?php echo esc_html( taiko_juku_t( 'contact_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
