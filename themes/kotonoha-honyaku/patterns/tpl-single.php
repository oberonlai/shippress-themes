<?php
/**
 * Title: Journal note
 * Slug: kotonoha-honyaku/tpl-single
 * Categories: kotonoha-honyaku
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kh-section kh-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kh-section kh-article"><!-- wp:group {"className": "kh-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-article__head"><!-- wp:post-terms {"term":"category","className":"kh-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kh-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kh-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kh-photo"} /-->

<!-- wp:post-content {"className":"kh-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kh-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kh-tags"} /-->

<!-- wp:group {"className": "kh-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
