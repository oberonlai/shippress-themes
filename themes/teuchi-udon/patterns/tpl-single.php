<?php
/**
 * Title: Journal note
 * Slug: teuchi-udon/tpl-single
 * Categories: teuchi-udon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tu-section tu-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tu-section tu-article"><!-- wp:group {"className": "tu-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-article__head"><!-- wp:post-terms {"term":"category","className":"tu-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tu-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tu-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tu-photo"} /-->

<!-- wp:post-content {"className":"tu-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tu-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tu-tags"} /-->

<!-- wp:group {"className": "tu-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( teuchi_udon_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( teuchi_udon_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
