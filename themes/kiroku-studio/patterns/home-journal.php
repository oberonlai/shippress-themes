<?php
/**
 * Title: Home: latest journal notes (sideways row)
 * Slug: kiroku-studio/home-journal
 * Categories: kiroku-studio
 * Keywords: journal, blog, posts, news, latest
 * Viewport Width: 1440
 * Description: The latest six journal notes in a sideways row on wide screens (a stack on phones), with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-section--journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-section--journal"><!-- wp:group {"align":"wide","className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split"><!-- wp:group {"className":"ks-split__a","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__a"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Case notes and studio logs.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-split__b ks-split__b--end","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__b ks-split__b--end"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-posts ks-posts--track"} -->
<div class="wp-block-query alignwide ks-posts ks-posts--track"><!-- wp:post-template -->
<!-- wp:group {"className":"ks-post","layout":{"type":"default"}} -->
<div class="wp-block-group ks-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"is-style-reveal"} /-->

<!-- wp:group {"className":"ks-post__body","layout":{"type":"default"}} -->
<div class="wp-block-group ks-post__body"><!-- wp:group {"className":"ks-post__meta","layout":{"type":"default"}} -->
<div class="wp-block-group ks-post__meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing recorded here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
