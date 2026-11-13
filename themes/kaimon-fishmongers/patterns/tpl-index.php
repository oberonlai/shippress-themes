<?php
/**
 * Title: Template: index and archive
 * Slug: kaimon-fishmongers/tpl-index
 * Categories: kaimon-fishmongers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--list","layout":{"type":"default"}} -->
<main class="wp-block-group kf-main kf-main--list"><!-- wp:query-title {"type":"archive","level":1,"className":"kf-h1 kf-h1--inner"} /-->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"className":"kf-news"} -->
<div class="wp-block-query kf-news"><!-- wp:post-template -->
<!-- wp:group {"className":"kf-news__row kf-rule","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group kf-news__row kf-rule"><!-- wp:post-date {"format":"j F Y","className":"kf-news__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kf-news__cat"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"kf-news__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
