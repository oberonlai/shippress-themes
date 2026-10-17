<?php
/**
 * Title: Workshop note
 * Slug: amime-takezaiku/tpl-single
 * Categories: amime-takezaiku
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: One workshop note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tk-section tk-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tk-section tk-article"><!-- wp:group {"className": "tk-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-article__head"><!-- wp:post-terms {"term":"category","className":"tk-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tk-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tk-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tk-photo"} /-->

<!-- wp:post-content {"className":"tk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tk-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tk-tags"} /-->

<!-- wp:group {"className": "tk-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( amime_takezaiku_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( amime_takezaiku_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
