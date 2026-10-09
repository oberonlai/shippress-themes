<?php
/**
 * Title: Latest news
 * Slug: hanabi-matsuri/latest-news
 * Categories: hanabi-matsuri, query
 * Keywords: news, posts, blog, latest
 * Viewport Width: 1440
 * Block Types: core/query
 * Description: The three most recent news posts with pictures, under a heading with a link to all the news.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-latest","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-latest" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">From the festival office</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Latest <em>news</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-link"} -->
<div class="wp-block-button is-style-arrow-link"><a class="wp-block-button__link wp-element-button" href="/news/">All news</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"hm-entries","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hm-entry hm-reveal","layout":{"type":"default"}} -->
<div class="wp-block-group hm-entry hm-reveal"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"hm-entry__image"} /-->

<!-- wp:group {"className":"hm-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hm-post-meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hm-entry__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
