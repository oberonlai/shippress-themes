<?php
/**
 * Title: News rows
 * Slug: okami-college/news-rows
 * Categories: okami-college
 * Keywords: college, hotel, school
 * Viewport Width: 1440
 * Description: A lilac panel stopping short of the right edge with post rows whose featured images poke out of the top-left corner, plus numbered pagination.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ok-news-panel","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ok-news-panel"><!-- wp:group {"className":"ok-panel ok-panel--lilac","layout":{"type":"default"}} -->
<div class="wp-block-group ok-panel ok-panel--lilac"><!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ok-news__q"} -->
<div class="wp-block-query ok-news__q"><!-- wp:post-template {"className":"ok-vrows"} -->
<!-- wp:group {"className":"ok-vrow","layout":{"type":"default"}} -->
<div class="wp-block-group ok-vrow"><!-- wp:group {"className":"ok-vrow__thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ok-vrow__thumb"><!-- wp:post-featured-image {"isLink":true,"width":"200px","height":"140px","className":"ok-vrow__img"} /--></div>
<!-- /wp:group --><!-- wp:group {"className":"ok-vrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group ok-vrow__body"><!-- wp:group {"className":"ok-vrow__meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ok-vrow__meta"><!-- wp:post-date {"format":"M j, Y","className":"ok-vrow__date"} /--><!-- wp:post-terms {"term":"category","className":"ok-vrow__cat"} /--></div>
<!-- /wp:group --><!-- wp:post-title {"level":3,"isLink":true,"className":"ok-vrow__title"} /--><!-- wp:post-excerpt {"excerptLength":24,"className":"ok-vrow__excerpt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"ok-pager","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
