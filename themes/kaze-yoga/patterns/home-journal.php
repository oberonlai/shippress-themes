<?php
/**
 * Title: Home: latest from the journal
 * Slug: kaze-yoga/home-journal
 * Categories: kaze-yoga
 * Keywords: posts, journal, news, blog
 * Viewport Width: 1440
 * Description: The three newest journal notes as quiet cards with a photograph, topic, date, title and summary.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ky-section ky-section--top-line","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ky-section ky-section--top-line"><!-- wp:group {"align":"wide","className":"ky-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ky-split"><!-- wp:group {"className":"ky-split__head","layout":{"type":"default"}} -->
<div class="wp-block-group ky-split__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes between breaths</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ky-split__side","layout":{"type":"default"}} -->
<div class="wp-block-group ky-split__side"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ky-notes ky-notes--three"} -->
<div class="wp-block-query alignwide ky-notes ky-notes--three"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"ky-post-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ky-post-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j M Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
