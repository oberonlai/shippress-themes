<?php
/**
 * Title: Latest from the journal
 * Slug: hibiki-records/latest-journal
 * Categories: hibiki-records
 * Keywords: records, vinyl
 * Viewport Width: 1440
 * Description: The three newest journal notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-section hb-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hb-section hb-section--journal"><!-- wp:group {"align":"wide","className":"hb-head hb-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hb-head hb-head--row"><!-- wp:group {"className":"hb-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hb-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the counter.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hb-links"} -->
<div class="wp-block-buttons hb-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hb-posts"} -->
<div class="wp-block-query alignwide hb-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hb-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group hb-post-body"><!-- wp:group {"className":"hb-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hb-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
