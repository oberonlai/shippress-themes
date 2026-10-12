<?php
/**
 * Title: Home: latest from the journal
 * Slug: mimi-veterinary/home-journal
 * Categories: mimi-veterinary
 * Keywords: journal, posts
 * Viewport Width: 1440
 * Description: The three latest posts as soft cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mv-section mv-journal-sec mv-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mv-section mv-journal-sec mv-section--last"><!-- wp:group {"className":"mv-intro","layout":{"type":"default"}} -->
<div class="wp-block-group mv-intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"mv-intro__title"} -->
<h2 class="wp-block-heading mv-intro__title">Notes on everyday pet care.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"mv-cards"} -->
<div class="wp-block-query alignwide mv-cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"mv-links mv-links--center"} -->
<div class="wp-block-buttons mv-links mv-links--center"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal posts</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
