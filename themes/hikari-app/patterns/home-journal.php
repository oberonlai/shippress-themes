<?php
/**
 * Title: Home: latest from the journal
 * Slug: hikari-app/home-journal
 * Categories: hikari-app
 * Keywords: home, journal, posts
 * Viewport Width: 1440
 * Description: The three latest posts as quiet cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ha-section ha-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ha-section ha-journal"><!-- wp:group {"className":"ha-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group ha-sec__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ha-sec__title"} -->
<h2 class="wp-block-heading ha-sec__title">Notes on working calmly.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ha-posts ha-posts--home"} -->
<div class="wp-block-query ha-posts ha-posts--home"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"ha-links"} -->
<div class="wp-block-buttons ha-links"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal entries</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
