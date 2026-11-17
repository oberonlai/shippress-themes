<?php
/**
 * Title: Template: single post
 * Slug: makiba-farmstay/tpl-single
 * Categories: makiba-farmstay
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal post: moss head with title and date, featured image, content and tags.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"mf-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull mf-main"><!-- wp:group {"tagName":"section","align":"full","className":"mf-plainhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-plainhead"><!-- wp:paragraph {"className":"mf-crumb"} -->
<p class="mf-crumb">Journal</p>
<!-- /wp:paragraph --><!-- wp:post-title {"level":1,"className":"mf-h1"} /-->

<!-- wp:post-date {"format":"j F Y","className":"mf-cap"} /--></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-section"><!-- wp:group {"className":"mf-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group mf-narrow"><!-- wp:post-featured-image {"className":"mf-post__img"} /-->

<!-- wp:post-content {"className":"mf-page__body","layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","separator":" · ","className":"mf-cap"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
