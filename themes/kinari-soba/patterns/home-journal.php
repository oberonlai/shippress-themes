<?php
/**
 * Title: Home: journal
 * Slug: kinari-soba/home-journal
 * Categories: kinari-soba
 * Keywords: soba, buckwheat, noodles
 * Viewport Width: 1440
 * Description: The three latest journal posts as square tray cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-band ks-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-band ks-band--last"><!-- wp:group {"align":"wide","className":"ks-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-wrap"><!-- wp:group {"className":"ks-sechead ks-sechead--row","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sechead ks-sechead--row"><!-- wp:group {"className":"ks-sechead__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-sechead__text"><!-- wp:paragraph {"className":"ks-mark"} -->
<p class="ks-mark">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-sechead__title"} -->
<h2 class="wp-block-heading ks-sechead__title">Notes from the counter.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-links"} -->
<div class="wp-block-buttons ks-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ks-notes ks-notes--cards"} -->
<div class="wp-block-query alignwide ks-notes ks-notes--cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"ks-note__photo"} /-->

<!-- wp:post-date {"format":"j M Y","className":"ks-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ks-note__title"} /-->

<!-- wp:post-terms {"term":"category","className":"ks-note__cat"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
