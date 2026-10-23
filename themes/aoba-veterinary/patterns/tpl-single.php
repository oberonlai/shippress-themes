<?php
/**
 * Title: Template: single story or post
 * Slug: aoba-veterinary/tpl-single
 * Categories: aoba-veterinary
 * Keywords: template
 * Viewport Width: 1440
 * Description: A photograph head (the featured image) with the framed box holding the title and date, then the story.
 */
$av = get_theme_file_uri( "assets/images/" );
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-hero av-hero--page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull av-hero av-hero--page"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":360,"minHeightUnit":"px","isDark":false,"align":"full","className":"av-hero__photo","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light av-hero__photo" style="min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"av-box","layout":{"type":"default"}} -->
<div class="wp-block-group av-box"><!-- wp:post-title {"textAlign":"center","level":1,"className":"av-box__title"} /-->

<!-- wp:post-date {"textAlign":"center","className":"av-box__line"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:post-content {"className":"av-prose av-story-body","layout":{"type":"constrained"}} /-->
