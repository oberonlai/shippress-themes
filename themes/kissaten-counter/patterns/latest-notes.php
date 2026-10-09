<?php
/**
 * Title: Latest notes — three cards
 * Slug: kissaten-counter/latest-notes
 * Categories: kissaten-counter, posts, query
 * Keywords: news, posts, blog, journal, latest
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three newest posts as tall rounded cards with date, category, title and excerpt, under a section title with a link to all notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-notes","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-notes" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"kc-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide kc-section-head"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Notes from the counter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size">Written <em>between orders.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"kc-arrow-link"} -->
<p class="kc-arrow-link"><a href="/notes/">All notes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-template {"className":"kc-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"kc-card","layout":{"type":"default"}} -->
<div class="wp-block-group kc-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","sizeSlug":"large"} /-->

<!-- wp:group {"className":"kc-card__meta","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kc-card__meta"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
