<?php
/**
 * Title: Home: latest from the journal
 * Slug: tabi-note/home-journal
 * Categories: tabi-note
 * Keywords: journal, posts
 * Description: The three latest journal posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tn-section tn-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-journal"><!-- wp:group {"className":"tn-section__head","layout":{"type":"default"}} -->
<div class="wp-block-group tn-section__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Notes from the trail</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"tn-latest","layout":{"type":"default"}} -->
<div class="wp-block-query tn-latest"><!-- wp:post-template {"className":"tn-latest__items"} -->
<!-- wp:group {"className":"tn-latest__item","layout":{"type":"default"}} -->
<div class="wp-block-group tn-latest__item"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tn-latest__image"} /-->

<!-- wp:post-date {"className":"tn-latest__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tn-latest__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"tn-buttons"} -->
<div class="wp-block-buttons tn-buttons"><!-- wp:button {"className":"is-style-quiet"} -->
<div class="wp-block-button is-style-quiet"><a class="wp-block-button__link wp-element-button" href="/journal/">Read the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
