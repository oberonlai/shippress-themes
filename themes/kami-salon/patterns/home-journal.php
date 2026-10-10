<?php
/**
 * Title: Home: the latest journal notes (mosaic)
 * Slug: kami-salon/home-journal
 * Categories: kami-salon
 * Keywords: journal, news, blog, posts, latest
 * Viewport Width: 1440
 * Description: The five latest journal posts as a mosaic of cards (the newest one larger), with a link to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section"><!-- wp:group {"align":"wide","className":"ks-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-split"><!-- wp:group {"className":"ks-split__head","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the chair</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group ks-split__side"><!-- wp:paragraph -->
<p>New looks, colour that lasts, and what we would tell a friend about their hair.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-posts ks-posts--home"} -->
<div class="wp-block-query alignwide ks-posts ks-posts--home"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"ks-cut-a"} /-->

<!-- wp:group {"className":"ks-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ks-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j M Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet. New notes arrive with new looks.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
