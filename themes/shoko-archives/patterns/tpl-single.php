<?php
/**
 * Title: Template: single post
 * Slug: shoko-archives/tpl-single
 * Categories: shoko-archives
 * Inserter: no
 * Viewport Width: 1440
 * Description: A single article with a tab for the category, a boxed title and ruled headings inside the text.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"sa-single","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull sa-single"><!-- wp:group {"className":"sa-wrap sa-wrap--page","layout":{"type":"default"}} -->
<div class="wp-block-group sa-wrap sa-wrap--page"><!-- wp:post-terms {"term":"category","className":"sa-tab sa-tab--inline"} /-->

<!-- wp:post-title {"level":1,"className":"sa-single__h1"} /-->

<!-- wp:post-date {"className":"sa-fine"} /-->

<!-- wp:post-featured-image {"aspectRatio":"16/9","className":"sa-photo"} /-->

<!-- wp:post-content {"className":"sa-prose","layout":{"type":"default"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
