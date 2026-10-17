<?php
/**
 * Title: Journal note
 * Slug: koshi-machiya/tpl-single
 * Categories: koshi-machiya
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kc-section kc-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kc-section kc-article"><!-- wp:group {"className": "kc-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-article__head"><!-- wp:post-terms {"term":"category","className":"kc-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kc-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kc-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kc-photo"} /-->

<!-- wp:post-content {"className":"kc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kc-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kc-tags"} /-->

<!-- wp:group {"className": "kc-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( koshi_machiya_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( koshi_machiya_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
