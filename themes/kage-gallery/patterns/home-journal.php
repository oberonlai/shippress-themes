<?php
/**
 * Title: Home: latest from the journal
 * Slug: kage-gallery/home-journal
 * Categories: kage-gallery
 * Keywords: gallery, journal, posts
 * Viewport Width: 1440
 * Description: The three latest journal posts as quiet cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kgl-section kgl-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kgl-section kgl-section--last"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"kgl-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group kgl-sechead"><!-- wp:paragraph {"className":"kgl-label"} -->
<p class="kgl-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kgl-links"} -->
<div class="wp-block-buttons kgl-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kgl-notes"} -->
<div class="wp-block-query alignwide kgl-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"j F Y"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
