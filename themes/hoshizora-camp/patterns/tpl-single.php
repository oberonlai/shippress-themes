<?php
/**
 * Title: Journal note
 * Slug: hoshizora-camp/tpl-single
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the watercolour, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hz-section hz-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hz-section hz-article"><!-- wp:group {"className": "hz-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-article__head"><!-- wp:post-terms {"term":"category","className":"hz-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hz-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hz-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hz-photo"} /-->

<!-- wp:post-content {"className":"hz-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-stars"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-stars"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hz-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hz-tags"} /-->

<!-- wp:group {"className": "hz-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hoshizora_camp_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hoshizora_camp_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
