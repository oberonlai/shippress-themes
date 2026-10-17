<?php
/**
 * Title: Journal note
 * Slug: kanna-komuten/tpl-single
 * Categories: kanna-komuten
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kn-section kn-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kn-section kn-article"><!-- wp:group {"className": "kn-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-article__head"><!-- wp:post-terms {"term":"category","className":"kn-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kn-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kn-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kn-photo"} /-->

<!-- wp:post-content {"className":"kn-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kn-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kn-tags"} /-->

<!-- wp:group {"className": "kn-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kanna_komuten_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kanna_komuten_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
