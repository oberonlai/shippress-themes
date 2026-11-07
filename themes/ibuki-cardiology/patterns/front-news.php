<?php
/**
 * Title: Home: news
 * Slug: ibuki-cardiology/front-news
 * Categories: ibuki-cardiology
 * Viewport Width: 1440
 * Description: Three latest posts as underlined rows and an ink block link to all news.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ib-news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ib-news"><!-- wp:group {"className":"ib-news__in","layout":{"type":"default"}} -->
<div class="wp-block-group ib-news__in"><!-- wp:heading {"level":2,"className":"ib-news__title"} -->
<h2 class="wp-block-heading ib-news__title">News</h2>
<!-- /wp:heading --><!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ib-newsq"} -->
<div class="wp-block-query ib-newsq"><!-- wp:post-template -->
<!-- wp:group {"className":"ib-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newsrow"><!-- wp:post-date {"format":"M j, Y","className":"ib-newsrow__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ib-newsrow__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ib-newsrow__t"} /-->

<!-- wp:paragraph {"className":"ib-arr"} -->
<p class="ib-arr">↗</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><!-- wp:paragraph {"className":"ib-blk ib-blk--ink"} -->
<p class="ib-blk ib-blk--ink"><a href="/news/">All news<span class="ib-arr">↗</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
