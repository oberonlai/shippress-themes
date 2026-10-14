<?php
/**
 * Title: Home: from the journal
 * Slug: asagao-kinema/home-journal
 * Categories: asagao-kinema
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: The three latest journal posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ak-section ak-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ak-section ak-journal"><!-- wp:group {"align":"wide","className":"ak-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ak-wrap"><!-- wp:group {"className":"ak-intro","layout":{"type":"default"}} -->
<div class="wp-block-group ak-intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ak-intro__title"} -->
<h2 class="wp-block-heading ak-intro__title">Notes from the dark room.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ak-cards"} -->
<div class="wp-block-query ak-cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"ak-links"} -->
<div class="wp-block-buttons ak-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal posts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
