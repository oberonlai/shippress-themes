<?php
/**
 * Title: Home: latest journal notes
 * Slug: wagu-mono/home-journal
 * Categories: wagu-mono, query
 * Keywords: journal, blog, posts, news
 * Viewport Width: 1440
 * Description: The three newest journal posts as a ruled contents list with small photographs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wm-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-section"><!-- wp:group {"align":"wide","className":"wm-head wm-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-head wm-head--row"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the bench</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:paragraph -->
<p>Wood, joints, oil and repairs, and small news from the showroom.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"wm-posts"} -->
<div class="wp-block-query alignwide wm-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"wm-post","layout":{"type":"default"}} -->
<div class="wp-block-group wm-post"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"className":"wm-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group wm-post-body"><!-- wp:group {"className":"wm-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group wm-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
