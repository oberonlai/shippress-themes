<?php
/**
 * Title: Journal — latest three notes
 * Slug: seiji-utsuwa/latest-journal
 * Categories: seiji-utsuwa, posts, query
 * Keywords: journal, news, posts, latest
 * Block Types: core/query
 * Viewport Width: 1440
 * Description: The three latest journal posts as a quiet gallery row: picture, category, date, title and excerpt, under a section title with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"su-section su-journal-latest","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull su-section su-journal-latest"><!-- wp:group {"align":"wide","className":"su-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide su-head"><!-- wp:group {"className":"su-head__text","layout":{"type":"default"}} -->
<div class="wp-block-group su-head__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">The journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the <em>kilns</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"su-more"} -->
<p class="su-more"><a href="/journal/">Read the journal →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"su-posts"} -->
<div class="wp-block-query alignwide su-posts"><!-- wp:post-template {"className":"su-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"su-card-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group su-card-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
