<?php
/**
 * Title: Latest from the journal
 * Slug: komugi-pan/latest-journal
 * Categories: komugi-pan, query
 * Keywords: posts, journal, news, blog
 * Viewport Width: 1440
 * Description: The three newest journal posts as white rounded cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kp-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kp-section"><!-- wp:group {"align":"wide","className":"kp-head kp-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kp-head kp-head--row"><!-- wp:group {"className":"kp-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kp-stack"><!-- wp:paragraph {"className":"is-style-tag"} -->
<p class="is-style-tag">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the bench</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kp-posts"} -->
<div class="wp-block-query alignwide kp-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"kp-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group kp-post-body"><!-- wp:group {"className":"kp-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kp-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
