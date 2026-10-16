<?php
/**
 * Title: Journal note
 * Slug: ichiba-monozukuri/tpl-single
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the print, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "im-section im-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull im-section im-article"><!-- wp:group {"className": "im-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group im-article__head"><!-- wp:post-terms {"term":"category","className":"im-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"im-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"im-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"im-photo"} /-->

<!-- wp:post-content {"className":"im-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-stars"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-stars"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "im-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group im-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"im-tags"} /-->

<!-- wp:group {"className": "im-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group im-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
