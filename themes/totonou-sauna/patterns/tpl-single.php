<?php
/**
 * Title: Journal note
 * Slug: totonou-sauna/tpl-single
 * Categories: totonou-sauna
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tn-section tn-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tn-section tn-article"><!-- wp:group {"className": "tn-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-article__head"><!-- wp:post-terms {"term":"category","className":"tn-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tn-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tn-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tn-photo"} /-->

<!-- wp:post-content {"className":"tn-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tn-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tn-tags"} /-->

<!-- wp:group {"className": "tn-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( totonou_sauna_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( totonou_sauna_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
