<?php
/**
 * Title: News — latest three posts
 * Slug: ikebana-kyoshitsu/latest-news
 * Categories: ikebana-kyoshitsu, posts, query
 * Keywords: news, journal, posts, query, latest, blog
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest posts as cards that sit at three different heights, with date and category in spaced capitals, under a heading with a link to all news.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ik-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ik-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"ik-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide ik-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the studio</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><a href="/news/">All news →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"ik-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"is-style-slow-zoom"} /-->

<!-- wp:group {"className":"ik-post-meta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group ik-post-meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
