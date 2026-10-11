<?php
/**
 * Title: Home: from the journal
 * Slug: neiro-hall/home-journal
 * Categories: neiro-hall
 * Keywords: journal
 * Viewport Width: 1440
 * Description: The three latest posts as a dated list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nh-section nh-journal nh-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nh-section nh-journal nh-section--last"><!-- wp:group {"className":"nh-index__intro","layout":{"type":"default"}} -->
<div class="wp-block-group nh-index__intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"nh-index__head"} -->
<h2 class="wp-block-heading nh-index__head">Notes from the green room</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"nh-index__lead"} -->
<p class="nh-index__lead">Rehearsals, tuning, and the people who play here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"nh-notes"} -->
<div class="wp-block-query nh-notes"><!-- wp:post-template -->
<!-- wp:post-date {"format":"d.m.Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"nh-links"} -->
<div class="wp-block-buttons nh-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal entries</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
