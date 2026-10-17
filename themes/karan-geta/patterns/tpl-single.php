<?php
/**
 * Title: Studio note
 * Slug: karan-geta/tpl-single
 * Categories: karan-geta
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One studio note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "kg-section kg-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull kg-section kg-article"><!-- wp:group {"className": "kg-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-article__head"><!-- wp:post-terms {"term":"category","className":"kg-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"kg-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"kg-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"kg-photo"} /-->

<!-- wp:post-content {"className":"kg-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "kg-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kg-tags"} /-->

<!-- wp:group {"className": "kg-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( karan_geta_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( karan_geta_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
