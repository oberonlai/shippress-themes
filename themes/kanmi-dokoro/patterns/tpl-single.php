<?php
/**
 * Title: Journal note
 * Slug: kanmi-dokoro/tpl-single
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kd-section kd-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kd-section kd-article"><!-- wp:group {"className": "kd-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-article__head"><!-- wp:post-terms {"term":"category","className":"kd-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kd-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kd-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kd-photo"} /-->

<!-- wp:post-content {"className":"kd-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kd-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kd-tags"} /-->

<!-- wp:group {"className": "kd-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kanmi_dokoro_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kanmi_dokoro_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
