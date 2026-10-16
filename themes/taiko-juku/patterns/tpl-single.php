<?php
/**
 * Title: Journal note
 * Slug: taiko-juku/tpl-single
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the photograph, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tj-section tj-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tj-section tj-article"><!-- wp:group {"className": "tj-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-article__head"><!-- wp:post-terms {"term":"category","className":"tj-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tj-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tj-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tj-photo"} /-->

<!-- wp:post-content {"className":"tj-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-stars"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-stars"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tj-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tj-tags"} /-->

<!-- wp:group {"className": "tj-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( taiko_juku_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( taiko_juku_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
