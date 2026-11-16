<?php
/**
 * Title: Single post
 * Slug: hako-capsule/tpl-single
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal entry: title band, date, featured image and content in a narrow column, then back to the journal.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--single","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--single"><!-- wp:group {"className":"hk-title","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title"><!-- wp:post-title {"level":1,"className":"hk-title__h hk-title__h--post"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in hk-in--post","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in hk-in--post"><!-- wp:post-date {"format":"j F Y","className":"hk-row__date"} /-->

<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"hk-single__img"} /-->

<!-- wp:group {"className":"hk-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group hk-narrow"><!-- wp:post-content {"layout":{"type":"default"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-narrow hk-single__meta","layout":{"type":"default"}} -->
<div class="wp-block-group hk-narrow hk-single__meta"><!-- wp:post-terms {"term":"category","className":"hk-chip"} /-->

<!-- wp:post-terms {"term":"post_tag","className":"hk-chip"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
