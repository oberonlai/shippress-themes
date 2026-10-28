<?php
/**
 * Title: Notes index head: moon ring and struck title
 * Slug: yoru-bar/notes-head
 * Categories: yoru-bar
 * Inserter: false
 * Description: The moon ring, a tan line and the struck "Notes" title above the posts list.
 */
?>
<!-- wp:html -->
<div class="yb-plainhead__moon"><?php echo yoru_bar_moon( 72, 'nh', 'yb-moon' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"yb-sub yb-plainhead__sub"} -->
<p class="yb-sub yb-plainhead__sub"><?php echo esc_html( yoru_bar_t( 'nt_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"xx-large","className":"yb-struck yb-plainhead__title"} -->
<h1 class="wp-block-heading has-text-align-center yb-struck yb-plainhead__title has-xx-large-font-size"><?php echo esc_html( yoru_bar_t( 'nt_h' ) ); ?></h1>
<!-- /wp:heading -->
