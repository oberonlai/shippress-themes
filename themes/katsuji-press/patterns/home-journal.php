<?php
/**
 * Title: Home: latest journal notes
 * Slug: katsuji-press/home-journal
 * Categories: katsuji-press
 * Keywords: letterpress, print shop
 * Viewport Width: 1440
 * Description: The three newest posts in a sideways strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kp-section kp-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kp-section kp-home-journal"><!-- wp:paragraph {"className": "kp-eyebrow"} -->
<p class="kp-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kp-sec__title"} -->
<h2 class="wp-block-heading kp-sec__title">Notes from the press room.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"kp-notes"} -->
<div class="wp-block-query alignwide kp-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"kp-note__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"kp-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kp-note__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
