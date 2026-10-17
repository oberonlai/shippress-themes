<?php
/**
 * Title: Studio note
 * Slug: itomaki-yarn/tpl-single
 * Categories: itomaki-yarn
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One knitting note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "iy-section iy-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull iy-section iy-article"><!-- wp:group {"className": "iy-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-article__head"><!-- wp:post-terms {"term":"category","className":"iy-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"iy-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"iy-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"iy-photo"} /-->

<!-- wp:post-content {"className":"iy-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "iy-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"iy-tags"} /-->

<!-- wp:group {"className": "iy-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group iy-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( itomaki_yarn_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( itomaki_yarn_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
