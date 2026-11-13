<?php
/**
 * Title: Single post
 * Slug: katachi-ergonomics/tpl-single
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk
 * Viewport Width: 1440
 * Inserter: no
 * Description: Post head with date and category, featured photograph and the post content.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"ke-sec ke-single","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull ke-sec ke-single"><!-- wp:group {"className":"ke-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ke-pagehead__in"><!-- wp:group {"className":"ke-post__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ke-post__meta"><!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"ke-h1 ke-h1--page"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"1.84","className":"ke-single__photo"} /-->

<!-- wp:post-content {"className":"ke-single__body","layout":{"type":"default"}} /-->

<!-- wp:group {"className":"ke-single__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ke-single__tags"><!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
