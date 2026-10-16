<?php
/**
 * Title: Latest journal notes
 * Slug: kokeshi-kobo/latest-journal
 * Categories: kokeshi-kobo
 * Keywords: kokeshi, kokeshi-kobo
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kk-section kk-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--journal"><!-- wp:group {"align":"wide","className":"kk-head kk-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-head kk-head--row"><!-- wp:group {"className":"kk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes <em>from the lathe.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kk-links"} -->
<div class="wp-block-buttons kk-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kk-posts"} -->
<div class="wp-block-query alignwide kk-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"kk-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group kk-post-body"><!-- wp:group {"className":"kk-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kk-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
