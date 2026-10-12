<?php
/**
 * Title: Latest from the journal
 * Slug: nameshi-leather/latest-journal
 * Categories: nameshi-leather
 * Keywords: leather, atelier
 * Viewport Width: 1440
 * Description: The three newest journal notes on stitched cells.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nm-section nm-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nm-section nm-section--journal"><!-- wp:group {"align":"wide","className":"nm-head nm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide nm-head nm-head--row"><!-- wp:group {"className":"nm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group nm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">From the <em>bench.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"nm-links"} -->
<div class="wp-block-buttons nm-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"nm-posts"} -->
<div class="wp-block-query alignwide nm-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"nm-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group nm-post-body"><!-- wp:group {"className":"nm-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group nm-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
