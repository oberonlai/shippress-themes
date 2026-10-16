<?php
/**
 * Title: Journal note
 * Slug: shinayaka-pilates/tpl-single
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sp-section sp-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sp-section sp-article"><!-- wp:group {"className": "sp-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-article__head"><!-- wp:post-terms {"term":"category","className":"sp-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sp-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sp-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sp-photo"} /-->

<!-- wp:post-content {"className":"sp-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sp-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sp-tags"} /-->

<!-- wp:group {"className": "sp-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sp-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( shinayaka_pilates_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( shinayaka_pilates_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
