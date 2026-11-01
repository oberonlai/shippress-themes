<?php
/**
 * Title: Template: 404
 * Slug: hibana-college/tpl-404
 * Categories: hibana-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hc-main hc-inner","layout":{"type":"default"},"tagName":"main"} -->
<main class="wp-block-group hc-main hc-inner">
<!-- wp:heading {"level":1,"className":"hc-ph__title"} -->
<h1 class="wp-block-heading hc-ph__title"><?php echo wp_kses_post( hibana_college_t( 't404' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-arrow"} -->
<p class="hc-arrow"><a href="/"><?php echo wp_kses_post( hibana_college_t( 't404_back' ) ); ?></a></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->
