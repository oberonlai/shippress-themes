<?php
/**
 * Title: Home: latest from the journal
 * Slug: undo-ba/home-journal
 * Categories: undo-ba
 * Keywords: journal, posts, news
 * Description: The three latest journal posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ub-section ub-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ub-section ub-journal"><!-- wp:group {"className":"ub-section__head","layout":{"type":"default"}} -->
<div class="wp-block-group ub-section__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the training floor</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ub-latest","layout":{"type":"default"}} -->
<div class="wp-block-query ub-latest"><!-- wp:post-template {"className":"ub-latest__items"} -->
<!-- wp:group {"className":"ub-latest__item","layout":{"type":"default"}} -->
<div class="wp-block-group ub-latest__item"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ub-latest__image"} /-->

<!-- wp:post-date {"className":"ub-latest__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ub-latest__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"ub-buttons"} -->
<div class="wp-block-buttons ub-buttons"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
