<?php
/**
 * Title: Template: single post
 * Slug: nohara-park/tpl-single
 * Categories: nohara-park
 * Inserter: no
 * Viewport Width: 1440
 * Description: Single post: straddling title band, featured image and text.
 */
?>
<!-- wp:group {"align":"full","className":"np-headband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-headband"><!-- wp:post-title {"level":1,"className":"np-h1 np-h1--band"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"np-sec np-sec--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-sec np-sec--page"><!-- wp:group {"className":"np-wrap np-wrap--read","layout":{"type":"default"}} -->
<div class="wp-block-group np-wrap np-wrap--read"><!-- wp:post-date {"className":"np-card__line"} /-->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"np-single__pic"} /-->

<!-- wp:post-content {"className":"np-entry","layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"","className":"np-tags"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
