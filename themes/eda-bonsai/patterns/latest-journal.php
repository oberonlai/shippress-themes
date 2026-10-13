<?php
/**
 * Title: Latest from the journal
 * Slug: eda-bonsai/latest-journal
 * Categories: eda-bonsai
 * Keywords: bonsai, nursery
 * Viewport Width: 1440
 * Description: The three newest journal notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-section eb-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-section eb-section--journal"><!-- wp:group {"align":"wide","className":"eb-head eb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide eb-head eb-head--row"><!-- wp:group {"className":"eb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group eb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the slope.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"eb-links"} -->
<div class="wp-block-buttons eb-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"eb-posts"} -->
<div class="wp-block-query alignwide eb-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

<!-- wp:group {"className":"eb-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group eb-post-body"><!-- wp:group {"className":"eb-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group eb-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
