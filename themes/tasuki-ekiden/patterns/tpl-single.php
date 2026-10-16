<?php
/**
 * Title: Journal note
 * Slug: tasuki-ekiden/tpl-single
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "te-section te-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull te-section te-article"><!-- wp:group {"className": "te-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group te-article__head"><!-- wp:post-terms {"term":"category","className":"te-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"te-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"te-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"te-photo"} /-->

<!-- wp:post-content {"className":"te-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "te-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group te-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"te-tags"} /-->

<!-- wp:group {"className": "te-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group te-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tasuki_ekiden_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( tasuki_ekiden_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
