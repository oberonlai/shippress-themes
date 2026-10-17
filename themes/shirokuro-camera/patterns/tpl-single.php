<?php
/**
 * Title: Counter note
 * Slug: shirokuro-camera/tpl-single
 * Categories: shirokuro-camera
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One counter note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sc-section sc-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sc-section sc-article"><!-- wp:group {"className": "sc-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-article__head"><!-- wp:post-terms {"term":"category","className":"sc-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sc-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sc-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sc-photo"} /-->

<!-- wp:post-content {"className":"sc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sc-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sc-tags"} /-->

<!-- wp:group {"className": "sc-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( shirokuro_camera_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( shirokuro_camera_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
