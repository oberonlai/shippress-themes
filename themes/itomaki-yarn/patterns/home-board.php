<?php
/**
 * Title: Home: today at the shop
 * Slug: itomaki-yarn/home-board
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: The synced shop board as a row of cards: the knitting table, the dye pot, the Saturday circle and pattern help.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-boardband", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-boardband"><!-- wp:group {"align": "wide", "className": "iy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-panel__head"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'board_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"itomaki-yarn/board"} /--></section>
<!-- /wp:group -->
