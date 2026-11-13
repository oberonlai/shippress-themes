<?php
/**
 * Title: Template: 404
 * Slug: noka-cheese/tpl-404
 * Categories: noka-cheese
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not found.
 */
?>
<!-- wp:group {"className":"nk-main","tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group nk-main"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( noka_cheese_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( noka_cheese_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->
