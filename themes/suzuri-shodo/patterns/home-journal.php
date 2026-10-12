<?php
/**
 * Title: Home: journal
 * Slug: suzuri-shodo/home-journal
 * Categories: suzuri-shodo
 * Keywords: calligraphy school
 * Viewport Width: 1440
 * Description: The three latest journal posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sz-section sz-band sz-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sz-section sz-band sz-band--last"><!-- wp:group {"align":"wide","className":"sz-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sz-sechead"><!-- wp:paragraph {"className":"sz-mark"} -->
<p class="sz-mark">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sz-sechead__title"} -->
<h2 class="wp-block-heading sz-sechead__title">Notes from the veranda.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"sz-links"} -->
<div class="wp-block-buttons sz-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"sz-notes"} -->
<div class="wp-block-query alignwide sz-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"j F Y"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
