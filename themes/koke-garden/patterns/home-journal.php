<?php
/**
 * Title: Home: journal
 * Slug: koke-garden/home-journal
 * Categories: koke-garden
 * Keywords: garden design, journal
 * Viewport Width: 1440
 * Description: The three latest journal notes as small cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kg-section kg-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-section--last"><!-- wp:group {"align":"wide","className":"kg-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide kg-sechead"><!-- wp:paragraph {"className":"kg-eyebrow"} -->
<p class="kg-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"kg-sechead__title"} -->
<h2 class="wp-block-heading kg-sechead__title">Notes from the garden.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"kg-links"} -->
<div class="wp-block-buttons kg-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kg-notes"} -->
<div class="wp-block-query alignwide kg-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"j M Y"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
