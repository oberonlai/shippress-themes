<?php
/**
 * Title: Studio note
 * Slug: urushi-nuri/tpl-single
 * Categories: urushi-nuri
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One studio note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "un-section un-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull un-section un-article"><!-- wp:group {"className": "un-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group un-article__head"><!-- wp:post-terms {"term":"category","className":"un-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"un-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"un-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"un-photo"} /-->

<!-- wp:post-content {"className":"un-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "un-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group un-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"un-tags"} /-->

<!-- wp:group {"className": "un-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group un-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( urushi_nuri_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( urushi_nuri_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
