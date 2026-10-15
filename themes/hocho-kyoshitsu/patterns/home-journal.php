<?php
/**
 * Title: Home: latest journal notes
 * Slug: hocho-kyoshitsu/home-journal
 * Categories: hocho-kyoshitsu
 * Keywords: cooking school, washoku
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-home-journal"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title">Notes from the counter.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hk-notes"} -->
<div class="wp-block-query alignwide hk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"hk-note__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"hk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hk-note__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
