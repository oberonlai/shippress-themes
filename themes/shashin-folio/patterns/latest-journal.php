<?php
/**
 * Title: Journal — latest three entries
 * Slug: shashin-folio/latest-journal
 * Categories: shashin-folio, posts, query
 * Keywords: news, journal, posts, query, latest, blog
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest posts as quiet stills — image, mono date and category, serif title — under a section heading with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section" style="margin-top:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","className":"sf-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide sf-section-head"><!-- wp:heading {"className":"sf-section-head__title"} -->
<h2 class="wp-block-heading sf-section-head__title">From the <em>journal</em></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-caption-label"} -->
<p class="is-style-caption-label"><a href="/journal/">All entries →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"sf-post-grid","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"is-style-still"} /-->

<!-- wp:group {"className":"sf-post-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group sf-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No journal entries yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
