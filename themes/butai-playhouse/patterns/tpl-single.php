<?php
/**
 * Title: Template: single post
 * Slug: butai-playhouse/tpl-single
 * Categories: butai-playhouse
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal post: featured image, title, date and content.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"bp-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull bp-main"><!-- wp:group {"tagName":"section","align":"full","className":"bp-postehead bp-plainhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-postehead bp-plainhead"><!-- wp:paragraph {"className":"bp-vlabel"} -->
<p class="bp-vlabel"><span>Journal</span> — <em>From the rehearsal room</em></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"bp-h1"} /-->

<!-- wp:post-date {"format":"j F Y","className":"bp-cap"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bp-section bp-page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bp-section bp-page"><!-- wp:group {"className":"bp-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group bp-narrow"><!-- wp:post-featured-image {"className":"bp-post__img"} /-->

<!-- wp:post-content {"className":"bp-page__body","layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","separator":" · ","className":"bp-cap"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
