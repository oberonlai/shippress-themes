<?php
/**
 * Title: Studio note
 * Slug: tsuribito-tackle/tpl-single
 * Categories: tsuribito-tackle
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One studio note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tt-section tt-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tt-section tt-article"><!-- wp:group {"className": "tt-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-article__head"><!-- wp:post-terms {"term":"category","className":"tt-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tt-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tt-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tt-photo"} /-->

<!-- wp:post-content {"className":"tt-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tt-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tt-tags"} /-->

<!-- wp:group {"className": "tt-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tt-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tsuribito_tackle_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( tsuribito_tackle_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
