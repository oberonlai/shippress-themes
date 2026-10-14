<?php
/**
 * Title: Journal: latest three (vertical spines)
 * Slug: yoru-chocolate/latest-journal
 * Categories: yoru-chocolate, posts
 * Keywords: latest, journal, vertical
 * Viewport Width: 1440
 * Description: The three latest journal posts as tall vertical spines read right to left, each with its date, its title set vertically and a short excerpt.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yc-section yc-section--rule yc-section--night","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull yc-section yc-section--rule yc-section--night"><!-- wp:group {"align":"wide","className":"yc-head yc-head--row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide yc-head yc-head--row"><!-- wp:group {"className":"yc-stack","layout":{"type":"default"}} -->
<div class="wp-block-group yc-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from <em>the night shift.</em></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"yc-posts yc-spines"} -->
<div class="wp-block-query alignwide yc-posts yc-spines"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"yc-post-body yc-spine","layout":{"type":"default"}} -->
<div class="wp-block-group yc-post-body yc-spine"><!-- wp:post-date {"format":"Y.m.d","className":"yc-spine__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yc-spine__title"} /-->

<!-- wp:post-excerpt {"excerptLength":16,"className":"yc-spine__excerpt"} /-->

<!-- wp:post-terms {"term":"category","className":"yc-spine__cat"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
