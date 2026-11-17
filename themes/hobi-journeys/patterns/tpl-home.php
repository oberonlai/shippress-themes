<?php
/**
 * Title: Template: home and index
 * Slug: hobi-journeys/tpl-home
 * Categories: hobi-journeys
 * Inserter: no
 * Viewport Width: 1440
 * Description: Template body.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"hj-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull hj-main"><!-- wp:group {"className":"hj-section hj-lines hj-listhead","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-section hj-lines hj-listhead"><!-- wp:group {"className":"hj-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hj-narrow"><!-- wp:heading {"level":1,"className":"hj-page-h"} -->
<h1 class="wp-block-heading hj-page-h">Journal.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Field notes and planning essays from our planners and tour directors, written from 41 delivered programmes.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hj-narrow hj-listbody","layout":{"type":"default"}} -->
<div class="wp-block-group hj-narrow hj-listbody"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hj-loop"} -->
<div class="wp-block-query hj-loop"><!-- wp:post-template {"className":"hj-posts"} -->
<!-- wp:group {"className":"hj-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group hj-jrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"0.82","className":"hj-jrow__img"} /-->

<!-- wp:group {"className":"hj-jrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hj-jrow__txt"><!-- wp:post-date {"className":"hj-jrow__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hj-jrow__t"} /-->

<!-- wp:post-excerpt {"excerptLength":24,"className":"hj-jrow__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hj-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No stories here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
