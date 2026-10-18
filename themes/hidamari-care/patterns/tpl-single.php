<?php
/**
 * Title: Note
 * Slug: hidamari-care/tpl-single
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hc-section hc-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hc-section hc-article"><!-- wp:group {"className": "hc-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-article__head"><!-- wp:post-terms {"term":"category","className":"hc-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hc-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hc-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hc-photo"} /-->

<!-- wp:post-content {"className":"hc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hc-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hc-tags"} /-->

<!-- wp:group {"className": "hc-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hidamari_care_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hidamari_care_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
