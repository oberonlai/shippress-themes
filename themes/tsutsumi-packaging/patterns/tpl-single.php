<?php
/**
 * Title: Note
 * Slug: tsutsumi-packaging/tpl-single
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tp-section tp-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tp-section tp-article"><!-- wp:group {"className": "tp-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-article__head"><!-- wp:post-terms {"term":"category","className":"tp-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tp-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tp-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tp-photo"} /-->

<!-- wp:post-content {"className":"tp-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tp-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tp-tags"} /-->

<!-- wp:group {"className": "tp-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tp-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tsutsumi_packaging_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( tsutsumi_packaging_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
