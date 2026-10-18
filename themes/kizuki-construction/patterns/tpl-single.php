<?php
/**
 * Title: Note
 * Slug: kizuki-construction/tpl-single
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kz-section kz-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kz-section kz-article"><!-- wp:group {"className": "kz-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-article__head"><!-- wp:post-terms {"term":"category","className":"kz-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kz-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kz-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kz-photo"} /-->

<!-- wp:post-content {"className":"kz-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kz-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kz-tags"} /-->

<!-- wp:group {"className": "kz-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kz-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kizuki_construction_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kizuki_construction_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
