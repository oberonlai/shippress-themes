<?php
/**
 * Title: Journal note
 * Slug: fukusa-chado/tpl-single
 * Categories: fukusa-chado
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "fc-section fc-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull fc-section fc-article"><!-- wp:group {"className": "fc-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-article__head"><!-- wp:post-terms {"term":"category","className":"fc-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"fc-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"fc-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"fc-photo"} /-->

<!-- wp:post-content {"className":"fc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "fc-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"fc-tags"} /-->

<!-- wp:group {"className": "fc-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( fukusa_chado_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( fukusa_chado_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
