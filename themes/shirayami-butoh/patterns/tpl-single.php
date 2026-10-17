<?php
/**
 * Title: Journal note
 * Slug: shirayami-butoh/tpl-single
 * Categories: shirayami-butoh
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sb-section sb-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sb-section sb-article"><!-- wp:group {"className": "sb-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-article__head"><!-- wp:post-terms {"term":"category","className":"sb-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sb-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sb-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sb-photo"} /-->

<!-- wp:post-content {"className":"sb-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sb-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sb-tags"} /-->

<!-- wp:group {"className": "sb-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( shirayami_butoh_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( shirayami_butoh_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
