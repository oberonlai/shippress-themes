<?php
/**
 * Title: Journal: latest three
 * Slug: kinu-kimono/latest-journal
 * Categories: kinu-kimono, posts
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: The three latest journal posts in a ruled row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kk-section kk-section--rule","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kk-section kk-section--rule"><!-- wp:group {"align":"wide","className":"kk-head kk-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kk-head kk-head--row"><!-- wp:group {"className":"kk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the dressing room.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kk-posts"} -->
<div class="wp-block-query alignwide kk-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"kk-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group kk-post-body"><!-- wp:group {"className":"kk-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kk-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
