<?php
/**
 * Title: Latest journal notes
 * Slug: shigure-umbrellas/latest-journal
 * Categories: shigure-umbrellas
 * Keywords: umbrellas, rain
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sg-section sg-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sg-section sg-section--journal"><!-- wp:group {"align":"wide","className":"sg-head sg-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sg-head sg-head--row"><!-- wp:group {"className":"sg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group sg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes <em>from the shop.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"sg-links"} -->
<div class="wp-block-buttons sg-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"sg-posts"} -->
<div class="wp-block-query alignwide sg-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"sg-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group sg-post-body"><!-- wp:group {"className":"sg-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group sg-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
