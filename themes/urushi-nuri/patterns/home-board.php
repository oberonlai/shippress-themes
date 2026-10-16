<?php
/**
 * Title: Home: the workshop board panel
 * Slug: urushi-nuri/home-board
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The synced workshop board as a row of white status cards on the pale panel: on the bench, in the drying cabinet, repairs and the Saturday class.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-boardband", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-boardband"><!-- wp:group {"align": "wide", "className": "un-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-panel__head"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'board' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'board_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"urushi-nuri/board"} /--></section>
<!-- /wp:group -->
