<?php
/**
 * Title: Article: one journal post
 * Slug: hada-dermatology/tpl-single
 * Categories: hada-dermatology
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hd-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hd-article"><!-- wp:group {"className":"hd-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group hd-article__head"><!-- wp:group {"className":"hd-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hd-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"F j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"hd-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"hd-article__picture"} /-->

<!-- wp:post-content {"className":"hd-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"hd-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hd-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":"Tags: ","className":"hd-tags"} /-->

<!-- wp:group {"className":"hd-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hd-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":"Older","showTitle":true} /-->

<!-- wp:post-navigation-link {"label":"Newer","showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hada-dermatology/call-cta"} /-->
