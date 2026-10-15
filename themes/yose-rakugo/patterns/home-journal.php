<?php
/**
 * Title: Home: latest journal notes
 * Slug: yose-rakugo/home-journal
 * Categories: yose-rakugo
 * Keywords: rakugo, yose theatre
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ys-section ys-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ys-section ys-home-journal"><!-- wp:paragraph {"className": "ys-eyebrow"} -->
<p class="ys-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ys-sec__title"} -->
<h2 class="wp-block-heading ys-sec__title">From the green room.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ys-notes"} -->
<div class="wp-block-query alignwide ys-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ys-note__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"ys-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ys-note__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
