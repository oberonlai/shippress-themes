<?php
/**
 * Title: Journal note
 * Slug: michishirube-consulting/tpl-single
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "mc-section mc-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull mc-section mc-article"><!-- wp:group {"className": "mc-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-article__head"><!-- wp:post-terms {"term":"category","className":"mc-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"mc-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"mc-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"mc-photo"} /-->

<!-- wp:post-content {"className":"mc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "mc-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"mc-tags"} /-->

<!-- wp:group {"className": "mc-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( michishirube_consulting_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( michishirube_consulting_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
