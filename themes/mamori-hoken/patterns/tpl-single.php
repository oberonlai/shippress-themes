<?php
/**
 * Title: Journal note
 * Slug: mamori-hoken/tpl-single
 * Categories: mamori-hoken
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "mh-section mh-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull mh-section mh-article"><!-- wp:group {"className": "mh-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-article__head"><!-- wp:post-terms {"term":"category","className":"mh-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"mh-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"mh-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"mh-photo"} /-->

<!-- wp:post-content {"className":"mh-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "mh-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"mh-tags"} /-->

<!-- wp:group {"className": "mh-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( mamori_hoken_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( mamori_hoken_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
