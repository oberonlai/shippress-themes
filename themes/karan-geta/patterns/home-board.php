<?php
/**
 * Title: Home: today at the shop
 * Slug: karan-geta/home-board
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: The synced shop board as a row of cards: open fitting times, what is blooming, rain and evening return.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-boardband", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-boardband"><!-- wp:group {"align": "wide", "className": "kg-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-panel__head"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'board_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"karan-geta/board"} /--></section>
<!-- /wp:group -->
