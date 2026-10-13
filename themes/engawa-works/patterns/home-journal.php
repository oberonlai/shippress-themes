<?php
/**
 * Title: Home: latest journal
 * Slug: engawa-works/home-journal
 * Categories: engawa-works
 * Keywords: coworking, workspace
 * Viewport Width: 1440
 * Description: The three latest journal posts as concrete cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ew-section ew-home-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ew-section ew-home-journal"><!-- wp:group {"align":"wide","className":"ew-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ew-sec__head"><!-- wp:group {"className":"ew-sec__head-text","layout":{"type":"default"}} -->
<div class="wp-block-group ew-sec__head-text"><!-- wp:paragraph {"className":"ew-eyebrow"} -->
<p class="ew-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ew-sec__title"} -->
<h2 class="wp-block-heading ew-sec__title">Notes from the long table.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ew-links"} -->
<div class="wp-block-buttons ew-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ew-cards alignwide","align":"wide"} -->
<div class="wp-block-query alignwide ew-cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ew-card-post__img"} /-->

<!-- wp:group {"className":"ew-card-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group ew-card-post__text"><!-- wp:post-date {"format":"j M Y","className":"ew-card-post__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ew-card-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
