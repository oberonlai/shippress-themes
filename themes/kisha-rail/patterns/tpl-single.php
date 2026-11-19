<?php
/**
 * Title: Template: single post
 * Slug: kisha-rail/tpl-single
 * Categories: kisha-rail
 * Viewport Width: 1440
 * Description: Single post: framed window with the featured photograph and title, a meta row and a narrow text column.
 */
?>
<!-- wp:group {"tagName":"section","className":"kr-iwin kr-iwin--post","layout":{"type":"default"}} -->
<section class="wp-block-group kr-iwin kr-iwin--post">
<!-- wp:group {"className":"kr-win kr-win--in kr-win--post sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win kr-win--in kr-win--post sp-parallax">
<!-- wp:post-featured-image {"className":"kr-win__img"} /-->
<!-- wp:group {"className":"kr-win__scrim","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__scrim">
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-win__fg","layout":{"type":"default"}} -->
<div class="wp-block-group kr-win__fg">
<!-- wp:post-title {"level":1,"className":"kr-h1"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kr-metarow","layout":{"type":"default"}} -->
<div class="wp-block-group kr-metarow">
<!-- wp:post-date {"className":"kr-post__date"} /-->

<!-- wp:post-terms {"term":"category","className":"kr-post__cat"} /-->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","className":"kr-sec kr-article","layout":{"type":"default"}} -->
<section class="wp-block-group kr-sec kr-article">
<!-- wp:group {"className":"kr-col","layout":{"type":"default"}} -->
<div class="wp-block-group kr-col">
<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"kr-tags"} /-->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
