<?php
/**
 * Title: Journal — latest three posts
 * Slug: aizome-shoten/latest-journal
 * Categories: aizome-shoten, posts, query
 * Keywords: journal, news, posts, query, latest, blog
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest journal posts as cards with a cover-ratio image, date and shelf in mono, and a condensed title, under a section title with a link to the whole journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"az-section az-journal-latest","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull az-section az-journal-latest" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"az-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide az-section-head"><!-- wp:heading -->
<h2 class="wp-block-heading">From the<br>journal</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-label az-link"} -->
<p class="is-style-label az-link"><a href="/journal/">The whole journal →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"az-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"az-card__image"} /-->

<!-- wp:group {"className":"az-post-meta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group az-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
