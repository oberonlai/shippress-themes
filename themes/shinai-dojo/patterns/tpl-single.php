<?php
/**
 * Title: Journal note
 * Slug: shinai-dojo/tpl-single
 * Categories: shinai-dojo
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sd-section sd-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sd-section sd-article"><!-- wp:group {"className": "sd-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-article__head"><!-- wp:post-terms {"term":"category","className":"sd-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sd-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sd-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sd-photo"} /-->

<!-- wp:post-content {"className":"sd-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sd-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sd-tags"} /-->

<!-- wp:group {"className": "sd-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( shinai_dojo_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( shinai_dojo_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
