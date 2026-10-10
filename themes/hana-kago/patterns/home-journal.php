<?php
/**
 * Title: Home: latest journal notes (masonry)
 * Slug: hana-kago/home-journal
 * Categories: hana-kago, query
 * Keywords: journal, blog, posts, news, masonry
 * Viewport Width: 1440
 * Description: The three newest journal posts as pressed-paper cards in masonry columns.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-head hk-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head hk-head--row"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">From the journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the back room</em></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph -->
<p>Care tips, what is in season, pressing and drying, and small news from Petal Row.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hk-posts"} -->
<div class="wp-block-query alignwide hk-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hk-post","layout":{"type":"default"}} -->
<div class="wp-block-group hk-post"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"className":"hk-post-body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-post-body"><!-- wp:group {"className":"hk-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
