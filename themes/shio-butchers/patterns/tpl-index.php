<?php
/**
 * Title: Template: index
 * Slug: shio-butchers/tpl-index
 * Categories: shio-butchers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sb-main sb-main--list","layout":{"type":"constrained"}} -->
<main class="wp-block-group sb-main sb-main--list"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( shio_butchers_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"sb-card-img"} /-->
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