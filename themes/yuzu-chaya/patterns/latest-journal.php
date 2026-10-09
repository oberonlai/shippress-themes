<?php
/**
 * Title: Journal — latest three notes
 * Slug: yuzu-chaya/latest-journal
 * Categories: yuzu-chaya, posts, query
 * Keywords: journal, news, posts, latest, blog
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest journal posts as rounded tiles in three colours, with picture, category, date, title and excerpt, under a section title with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-journal-latest","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-journal-latest" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"yc-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide yc-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading">From the <em>journal</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yc-link"} -->
<p class="yc-link"><a href="/journal/">The whole journal →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"yc-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"yc-card-body","layout":{"type":"default"}} -->
<div class="wp-block-group yc-card-body"><!-- wp:group {"className":"yc-card-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group yc-card-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
