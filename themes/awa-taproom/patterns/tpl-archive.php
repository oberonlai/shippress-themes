<?php
/**
 * Title: Template: archive
 * Slug: awa-taproom/tpl-archive
 * Categories: awa-taproom
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"awa-main","layout":{"type":"default"}} -->
<main class="wp-block-group awa-main"><!-- wp:pattern {"slug":"awa-taproom/blog-head"} /-->

<!-- wp:group {"tagName":"section","className":"awa-sec","layout":{"type":"default"}} -->
<section class="wp-block-group awa-sec"><!-- wp:group {"className":"awa-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group awa-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"awa-posts","layout":{"type":"default"}} -->
<!-- wp:group {"className":"awa-post","layout":{"type":"default"}} -->
<div class="wp-block-group awa-post"><!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:post-date {"format":"j M Y"} /-->
<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"awa-body"} -->
<p class="awa-body"><?php echo wp_kses_post( awa_taproom_t( 'k1ac94774' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->