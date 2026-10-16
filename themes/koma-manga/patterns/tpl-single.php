<?php
/**
 * Title: Studio note
 * Slug: koma-manga/tpl-single
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One studio note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "km-section km-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull km-section km-article"><!-- wp:group {"className": "km-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group km-article__head"><!-- wp:post-terms {"term":"category","className":"km-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"km-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"km-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"km-photo"} /-->

<!-- wp:post-content {"className":"km-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "km-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group km-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"km-tags"} /-->

<!-- wp:group {"className": "km-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group km-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( koma_manga_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( koma_manga_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
