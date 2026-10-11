<?php
/**
 * Title: Journal: latest three
 * Slug: kaori-cosme/latest-journal
 * Categories: kaori-cosme, posts
 * Keywords: latest, journal
 * Viewport Width: 1440
 * Description: The three latest journal posts in a row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-section kc-section--rule","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-section--rule"><!-- wp:group {"align":"wide","className":"kc-head kc-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kc-head kc-head--row"><!-- wp:group {"className":"kc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group kc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the atelier.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kc-posts"} -->
<div class="wp-block-query alignwide kc-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"kc-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post-body"><!-- wp:group {"className":"kc-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group kc-post-meta"><!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
