<?php
/**
 * Title: News — the latest three
 * Slug: kura-shizuku/latest-news
 * Categories: kura-shizuku, posts, query
 * Keywords: news, posts, latest, brewery
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest news posts in a centred row: picture, category, date, title and excerpt, under a centred title with a link to all news.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-news-latest","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-news-latest"><!-- wp:group {"align":"wide","className":"ks-head ks-centre","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-head ks-centre"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">News from the brewery</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the <em>storehouse</em></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-gilded"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-gilded"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"ks-more"} -->
<p class="ks-more"><a href="/news/">All news →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-posts"} -->
<div class="wp-block-query alignwide ks-posts"><!-- wp:post-template {"className":"ks-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"ks-card-meta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group ks-card-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
