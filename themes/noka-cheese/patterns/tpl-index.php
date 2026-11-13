<?php
/**
 * Title: Template: index
 * Slug: noka-cheese/tpl-index
 * Categories: noka-cheese
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal list.
 */
?>
<!-- wp:group {"className":"nk-main nk-main--list","tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group nk-main nk-main--list"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( noka_cheese_t( 'tpl_index_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nk-card-img"} /-->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
