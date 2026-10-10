<?php
/**
 * Title: Journal — latest three notes
 * Slug: yuzu-chaya/latest-journal
 * Categories: yuzu-chaya, posts, query
 * Keywords: journal, blog, posts, latest
 * Viewport Width: 1440
 * Description: The three latest journal posts with a photograph, category, date, title and excerpt, under a section title with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--line","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--line"><!-- wp:group {"align":"wide","className":"yc-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-head"><!-- wp:group {"className":"yc-head__titles","layout":{"type":"default"}} -->
<div class="wp-block-group yc-head__titles"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the <em>counter</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yc-link"} -->
<p class="yc-link"><a href="/journal/">The whole journal</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"yc-list"} -->
<div class="wp-block-query alignwide yc-list"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

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
