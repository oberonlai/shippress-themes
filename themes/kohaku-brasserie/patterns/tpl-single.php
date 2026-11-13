<?php
/**
 * Title: Template: single post
 * Slug: kohaku-brasserie/tpl-single
 * Categories: kohaku-brasserie
 * Inserter: no
 * Description: Single post: a 2.4:1 letterbox featured image, date, category, title, text and tags.
 */
?>
<!-- wp:group {"align":"full","className":"kb-sec kb-single","tagName":"article","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull kb-sec kb-single"><!-- wp:group {"className":"kb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kb-wrap"><!-- wp:post-featured-image {"aspectRatio":"2.4/1","className":"kb-single__img"} /-->

<!-- wp:group {"className":"kb-single__meta","layout":{"type":"default"}} -->
<div class="wp-block-group kb-single__meta"><!-- wp:post-date {"format":"d F Y","className":"kb-row__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kb-single__cat"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"kb-single__title"} /-->

<!-- wp:group {"className":"kb-prose","layout":{"type":"default"}} -->
<div class="wp-block-group kb-prose"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"post_tag","className":"kb-single__tags"} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
