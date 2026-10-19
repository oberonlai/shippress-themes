<?php
/**
 * Title: Note
 * Slug: asahi-gakuen/tpl-single
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "ag-section ag-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull ag-section ag-article"><!-- wp:group {"className": "ag-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-article__head"><!-- wp:post-terms {"term":"category","className":"ag-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"ag-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ag-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"ag-photo"} /-->

<!-- wp:post-content {"className":"ag-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "ag-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"ag-tags"} /-->

<!-- wp:group {"className": "ag-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( asahi_gakuen_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( asahi_gakuen_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
