<?php
/**
 * Title: Home: journal
 * Slug: yohaku-studio/home-journal
 * Categories: yohaku-studio
 * Keywords: design studio
 * Viewport Width: 1440
 * Description: The three latest journal posts as small cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yh-section yh-band yh-band--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yh-section yh-band yh-band--last"><!-- wp:group {"align":"wide","className":"yh-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yh-sechead"><!-- wp:paragraph {"className":"yh-fig"} -->
<p class="yh-fig">&#167; 06 &#8212; Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yh-sechead__title"} -->
<h2 class="wp-block-heading yh-sechead__title">Notes from the studio.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"yh-links"} -->
<div class="wp-block-buttons yh-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"yh-notes"} -->
<div class="wp-block-query alignwide yh-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"j M Y"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
