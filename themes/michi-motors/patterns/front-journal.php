<?php
/**
 * Title: Home: journal
 * Slug: michi-motors/front-journal
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Two latest posts side by side, unequal widths.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-sec mm-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-journal"><!-- wp:group {"align": "wide", "className": "mm-journal__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-journal__head"><!-- wp:group {"className": "mm-head", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h">From the<br>service bay.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead">Short notes on buying, checking and looking after a car.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"mm-notes"} -->
<div class="wp-block-query alignwide mm-notes"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"className":"mm-note__img"} /-->

<!-- wp:group {"className":"mm-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mm-note__text"><!-- wp:group {"className":"mm-note__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mm-note__meta"><!-- wp:post-terms {"term":"category","className":"mm-note__cat"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"mm-note__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mm-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"mm-note__ex"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No notes yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"align": "wide", "className": "mm-journal__more", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-journal__more"><!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/journal/">All notes</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
