<?php
/**
 * Title: Journal note
 * Slug: hotaru-ehon/tpl-single
 * Categories: hotaru-ehon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "ht-section ht-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull ht-section ht-article"><!-- wp:group {"className": "ht-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-article__head"><!-- wp:post-terms {"term":"category","className":"ht-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"ht-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ht-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"ht-photo"} /-->

<!-- wp:post-content {"className":"ht-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "ht-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"ht-tags"} /-->

<!-- wp:group {"className": "ht-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hotaru_ehon_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hotaru_ehon_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
