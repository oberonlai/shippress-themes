<?php
/**
 * Title: Template: search
 * Slug: tochi-academy/tpl-search
 * Categories: tochi-academy
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ta-main ta-page ta-page--archive","layout":{"type":"default"}} -->
<main class="wp-block-group ta-main ta-page ta-page--archive"><!-- wp:group {"className":"ta-page__head","layout":{"type":"default"}} -->
<div class="wp-block-group ta-page__head"><!-- wp:query-title {"type":"search","level":1,"className":"ta-page__title"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":false} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"ta-journal","layout":{"type":"default"}} -->
<div class="wp-block-query ta-journal"><!-- wp:post-template {"className":"ta-cards ta-cards--posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ta-card ta-card--post","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card ta-card--post"><!-- wp:post-featured-image {"isLink":true,"className":"ta-card__photo"} /-->

<!-- wp:post-date {"className":"ta-vdate"} /-->

<!-- wp:group {"className":"ta-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card__panel"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No results. Try another word.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
