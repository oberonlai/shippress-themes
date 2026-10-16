<?php
/**
 * Title: Home: today at the shop
 * Slug: hanayui-kimono/home-board
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: The synced shop board as a row of cards: open fitting times, what is blooming, rain and evening return.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-boardband", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-boardband"><!-- wp:group {"align": "wide", "className": "hy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-panel__head"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'board_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hanayui-kimono/board"} /--></section>
<!-- /wp:group -->
