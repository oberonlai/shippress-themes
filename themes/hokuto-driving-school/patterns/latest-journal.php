<?php
/**
 * Title: Journal: latest three
 * Slug: hokuto-driving-school/latest-journal
 * Categories: hokuto-driving-school
 * Keywords: journal, posts, latest
 * Viewport Width: 1440
 * Description: The three latest journal posts with photographs.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-row-head hk-row-head--end","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-row-head hk-row-head--end"><!-- wp:group {"className":"hk-row-head__title","layout":{"type":"default"}} -->
<div class="wp-block-group hk-row-head__title"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the depot.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All journal notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hk-posts"} -->
<div class="wp-block-query alignwide hk-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hk-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j F Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hk-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
