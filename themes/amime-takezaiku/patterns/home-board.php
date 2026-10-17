<?php
/**
 * Title: Home: today at the workshop
 * Slug: amime-takezaiku/home-board
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The synced workshop board as one horizontal strip: the workshop door, what is on the bench, the weaving class and repairs.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-boardband", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-boardband"><!-- wp:group {"align": "wide", "className": "tk-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-panel__head"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'board_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"amime-takezaiku/board"} /--></section>
<!-- /wp:group -->
