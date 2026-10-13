<?php
/**
 * Title: Journal: latest three
 * Slug: kurogane-ironware/latest-journal
 * Categories: kurogane-ironware, posts
 * Keywords: latest, journal
 * Viewport Width: 1440
 * Description: The three latest journal posts in a row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--rule","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--rule"><!-- wp:group {"align":"wide","className":"kg-head kg-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kg-head kg-head--row"><!-- wp:group {"className":"kg-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kg-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the foundry.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kg-posts"} -->
<div class="wp-block-query alignwide kg-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"kg-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group kg-post-body"><!-- wp:group {"className":"kg-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kg-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
