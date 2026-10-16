<?php
/**
 * Title: Home: latest journal notes
 * Slug: akachochin-izakaya/home-journal
 * Categories: akachochin-izakaya
 * Keywords: izakaya, yakitori, sake
 * Viewport Width: 1440
 * Description: The three newest posts as a row of cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ak-section ak-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ak-section ak-home-journal"><!-- wp:paragraph {"className": "ak-eyebrow"} -->
<p class="ak-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ak-sec__title"} -->
<h2 class="wp-block-heading ak-sec__title">Notes from behind the counter.</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ak-notes"} -->
<div class="wp-block-query alignwide ak-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ak-note__img"} /-->

<!-- wp:post-date {"format":"j F Y","className":"ak-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ak-note__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
