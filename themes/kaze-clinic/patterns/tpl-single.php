<?php
/**
 * Title: Template: single post
 * Slug: kaze-clinic/tpl-single
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: A single post: title, date, category, featured image and content in a 930px column.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-single","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-single"><!-- wp:group {"className":"kz-wrap kz-wrap--lead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--lead"><!-- wp:post-title {"level":1,"className":"kz-h1"} /-->

<!-- wp:group {"className":"kz-single__meta","layout":{"type":"default"}} -->
<div class="wp-block-group kz-single__meta"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"kz-single__img"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
