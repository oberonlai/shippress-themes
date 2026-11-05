<?php
/**
 * Title: Template: archive
 * Slug: waku-exhibits/tpl-archive
 * Categories: waku-exhibits
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"wk-main","layout":{"type":"default"}} -->
<main class="wp-block-group wk-main"><!-- wp:group {"tagName":"section","align":"full","className":"wk-sec wk-page wk-list-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wk-sec wk-page wk-list-page"><!-- wp:paragraph {"className":"wk-label"} -->
<p class="wk-label"><?php echo wp_kses_post( waku_exhibits_t( 'k71f01f32' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"wk-h1 wk-fill wk-fill--p16"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"wk-list-q","layout":{"type":"default"}} -->
<div class="wp-block-query wk-list-q"><!-- wp:post-template {"className":"wk-posts","layout":{"type":"default"}} -->
<!-- wp:group {"className":"wk-post","layout":{"type":"default"}} -->
<div class="wp-block-group wk-post"><!-- wp:post-featured-image {"isLink":true,"className":"wk-post__photo"} /-->

<!-- wp:group {"className":"wk-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group wk-post__text"><!-- wp:post-terms {"term":"category","className":"wk-cat"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"wk-story__h"} /-->

<!-- wp:post-excerpt {"excerptLength":30,"className":"wk-story__p"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( waku_exhibits_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"waku-exhibits/front-request"} /-->