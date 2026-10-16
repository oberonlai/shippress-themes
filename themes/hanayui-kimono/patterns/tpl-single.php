<?php
/**
 * Title: Studio note
 * Slug: hanayui-kimono/tpl-single
 * Categories: hanayui-kimono
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One studio note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hy-section hy-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hy-section hy-article"><!-- wp:group {"className": "hy-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-article__head"><!-- wp:post-terms {"term":"category","className":"hy-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hy-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hy-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hy-photo"} /-->

<!-- wp:post-content {"className":"hy-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hy-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hy-tags"} /-->

<!-- wp:group {"className": "hy-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hanayui_kimono_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hanayui_kimono_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
