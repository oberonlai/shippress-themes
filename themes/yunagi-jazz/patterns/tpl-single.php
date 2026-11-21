<?php
/**
 * Title: Template: single post
 * Slug: yunagi-jazz/tpl-single
 * Categories: yunagi-jazz
 * Viewport Width: 1440
 * Description: Single post: featured photograph on the ink mat with the title over its bottom edge, then a 760px text column on a white sheet.
 */
?>
<!-- wp:group {"className":"yj-mat yj-mat--post","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat yj-mat--post">
<!-- wp:group {"className":"yj-mat__col yj-mat__col--wide","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__col yj-mat__col--wide">
<!-- wp:post-featured-image {"className":"yj-mat__img"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__grad","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__grad"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-mat__title","layout":{"type":"default"}} -->
<div class="wp-block-group yj-mat__title">
<!-- wp:post-terms {"term":"category","className":"yj-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"yj-h1 yj-h1--mini"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-sheet yj-sheet--post","layout":{"type":"default"},"tagName":"section"} -->
<section class="wp-block-group yj-sheet yj-sheet--post">
<!-- wp:group {"className":"yj-postmeta","layout":{"type":"default"}} -->
<div class="wp-block-group yj-postmeta">
<!-- wp:post-date {"className":"yj-post__date"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yj-col","layout":{"type":"default"}} -->
<div class="wp-block-group yj-col">
<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"yj-tags"} /-->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
