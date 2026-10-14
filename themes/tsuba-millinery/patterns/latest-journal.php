<?php
/**
 * Title: Journal: latest three as a ruled index
 * Slug: tsuba-millinery/latest-journal
 * Categories: tsuba-millinery
 * Keywords: latest, journal, millinery
 * Viewport Width: 1440
 * Description: The three latest notes from the atelier as ruled index rows: date, a large title with a short excerpt, and a small etching on the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tm-index-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tm-index-sec"><!-- wp:group {"className":"tm-index-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group tm-index-sec__head"><!-- wp:heading {"className":"tm-index-sec__title"} -->
<h2 class="wp-block-heading tm-index-sec__title">Notes from the bench</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"tm-links"} -->
<div class="wp-block-buttons tm-links"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"tm-index-list"} -->
<div class="wp-block-query tm-index-list"><!-- wp:post-template -->
<!-- wp:post-date {"format":"Y.m.d","className":"tm-index-list__date"} /-->

<!-- wp:group {"className":"tm-index-list__body","layout":{"type":"default"}} -->
<div class="wp-block-group tm-index-list__body"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tm-index-list__picture"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
