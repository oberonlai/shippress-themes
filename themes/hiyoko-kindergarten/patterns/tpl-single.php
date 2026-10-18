<?php
/**
 * Title: Journal note
 * Slug: hiyoko-kindergarten/tpl-single
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hk-section hk-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hk-section hk-article"><!-- wp:group {"className": "hk-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-article__head"><!-- wp:post-terms {"term":"category","className":"hk-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hk-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hk-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hk-photo"} /-->

<!-- wp:post-content {"className":"hk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hk-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hk-tags"} /-->

<!-- wp:group {"className": "hk-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
