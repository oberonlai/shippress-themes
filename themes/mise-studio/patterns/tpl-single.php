<?php
/**
 * Title: Template: single post
 * Slug: mise-studio/tpl-single
 * Categories: mise-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: A single post: featured image and a white reading sheet with ring title, date, category and content.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ms-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ms-sec"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:post-featured-image {"aspectRatio":"16/9","className":"ms-single__img"} /-->

<!-- wp:group {"className":"ms-sheet ms-sheet--post","layout":{"type":"default"}} -->
<div class="wp-block-group ms-sheet ms-sheet--post"><!-- wp:post-title {"level":1,"className":"ms-h1 ms-h1--ring"} /-->

<!-- wp:group {"className":"ms-single__meta","layout":{"type":"default"}} -->
<div class="wp-block-group ms-single__meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
