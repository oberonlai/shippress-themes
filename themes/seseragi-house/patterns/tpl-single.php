<?php
/**
 * Title: Template: single post
 * Slug: seseragi-house/tpl-single
 * Categories: seseragi-house
 * Viewport Width: 1440
 * Description: Single post: framed photograph window with the title, then the text column.
 */
?>
<!-- wp:group {"tagName":"section","className":"sese-hero sese-hero--post","layout":{"type":"default"}} -->
<section class="wp-block-group sese-hero sese-hero--post">
<!-- wp:group {"className":"sese-win sese-win--post sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win sese-win--post sp-parallax">
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"sese-win__img"} /-->

<!-- wp:group {"className":"sese-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__scrim"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sese-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group sese-win__fg">
<!-- wp:post-title {"level":1,"className":"sese-h1 sese-h1--page"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sese-sec sese-article","layout":{"type":"default"}} -->
<section class="wp-block-group sese-sec sese-article">
<!-- wp:group {"className":"sese-col","layout":{"type":"default"}} -->
<div class="wp-block-group sese-col">
<!-- wp:post-terms {"term":"category","className":"sese-eyebrow"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"sese-tags"} /-->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
