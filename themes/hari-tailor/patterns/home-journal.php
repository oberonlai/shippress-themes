<?php
/**
 * Title: Home: journal
 * Slug: hari-tailor/home-journal
 * Categories: hari-tailor
 * Keywords: tailor
 * Viewport Width: 1440
 * Description: The three latest journal notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ht-section ht-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-section--last"><!-- wp:group {"align":"wide","className":"ht-row-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ht-row-head"><!-- wp:group {"className":"ht-intro","layout":{"type":"default"}} -->
<div class="wp-block-group ht-intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ht-intro__title"} -->
<h2 class="wp-block-heading ht-intro__title">Notes from the cutting table.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ht-links"} -->
<div class="wp-block-buttons ht-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ht-cards"} -->
<div class="wp-block-query alignwide ht-cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
