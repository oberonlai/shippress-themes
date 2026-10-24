<?php
/**
 * Title: Template: 404
 * Slug: kosei-architects/tpl-404
 * Categories: kosei-architects
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ks-main","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group ks-main"><!-- wp:heading {"level":1,"className":"ks-pagetitle"} -->
<h1 class="wp-block-heading ks-pagetitle"><?php echo esc_html( kosei_architects_t( 'tpl_404_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kosei_architects_t( 'tpl_404_p' ) ); ?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->
