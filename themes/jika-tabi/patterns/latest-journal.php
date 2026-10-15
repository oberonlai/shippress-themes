<?php
/**
 * Title: Latest journal notes
 * Slug: jika-tabi/latest-journal
 * Categories: jika-tabi
 * Keywords: tabi footwear, jika-tabi
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"jt-section jt-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull jt-section jt-section--journal"><!-- wp:group {"align":"wide","className":"jt-head jt-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide jt-head jt-head--row"><!-- wp:group {"className":"jt-stack","layout":{"type":"default"}} -->
<div class="wp-block-group jt-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes <em>from the bench.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"jt-links"} -->
<div class="wp-block-buttons jt-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"jt-posts"} -->
<div class="wp-block-query alignwide jt-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"jt-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group jt-post-body"><!-- wp:group {"className":"jt-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group jt-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
