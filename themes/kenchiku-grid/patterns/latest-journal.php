<?php
/**
 * Title: Journal — latest three entries
 * Slug: kenchiku-grid/latest-journal
 * Categories: kenchiku-grid, posts, query
 * Keywords: news, journal, posts, query, latest
 * Block Types: core/query
 * Viewport Width: 1400
 * Description: The three latest posts as grid modules — cropped image, mono date and category, title — under a numbered section head.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","className":"kg-grid kg-section-head","style":{"spacing":{"blockGap":{"top":"0.5rem","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid kg-section-head"><!-- wp:paragraph {"className":"is-style-mono-label kg-section-head__no","style":{"layout":{"columnSpan":2}}} -->
<p class="is-style-mono-label kg-section-head__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-mono-label","style":{"layout":{"columnSpan":4}}} -->
<p class="is-style-mono-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","className":"is-style-mono-label","style":{"layout":{"columnSpan":6}}} -->
<p class="has-text-align-right is-style-mono-label"><a href="/journal/">All entries →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"kg-grid","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":12}} -->
<div class="wp-block-group alignwide kg-grid" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"className":"kg-section-title","style":{"layout":{"columnSpan":7,"columnStart":3}}} -->
<h2 class="wp-block-heading kg-section-title">Notes from the drawing table and the site.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-template {"className":"kg-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"is-style-grid-frame"} /-->

<!-- wp:group {"className":"kg-post-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group kg-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No journal entries yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
