<?php
/**
 * Title: Journal note
 * Slug: yukimi-kakigori/tpl-single
 * Categories: yukimi-kakigori
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "yk-section yk-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull yk-section yk-article"><!-- wp:group {"className": "yk-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-article__head"><!-- wp:post-terms {"term":"category","className":"yk-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"yk-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"yk-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"yk-photo"} /-->

<!-- wp:post-content {"className":"yk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "yk-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"yk-tags"} /-->

<!-- wp:group {"className": "yk-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( yukimi_kakigori_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( yukimi_kakigori_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
