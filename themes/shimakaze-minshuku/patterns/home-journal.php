<?php
/**
 * Title: Home: latest journal notes
 * Slug: shimakaze-minshuku/home-journal
 * Categories: shimakaze-minshuku
 * Keywords: island guesthouse, minshuku
 * Viewport Width: 1440
 * Description: The three newest posts.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sm-section sm-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sm-section sm-home-journal"><!-- wp:paragraph {"className": "sm-eyebrow"} -->
<p class="sm-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sm-sec__title"} -->
<h2 class="wp-block-heading sm-sec__title">From the front desk.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"sm-notes"} -->
<div class="wp-block-query alignwide sm-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"sm-note__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"sm-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sm-note__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
