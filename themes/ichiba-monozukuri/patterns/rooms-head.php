<?php
/**
 * Title: Makers: page head
 * Slug: ichiba-monozukuri/rooms-head
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The indigo page head of Makers.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-pagehead"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'pg_rooms' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "im-pagehead__title"} -->
<h1 class="wp-block-heading im-pagehead__title"><?php echo esc_html( ichiba_monozukuri_t( 'rooms_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-pagehead__lead"} -->
<p class="im-pagehead__lead"><?php echo esc_html( ichiba_monozukuri_t( 'rooms_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
