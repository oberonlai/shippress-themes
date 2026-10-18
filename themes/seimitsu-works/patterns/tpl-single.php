<?php
/**
 * Title: Note
 * Slug: seimitsu-works/tpl-single
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "sw-section sw-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull sw-section sw-article"><!-- wp:group {"className": "sw-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-article__head"><!-- wp:post-terms {"term":"category","className":"sw-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"sw-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"sw-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"sw-photo"} /-->

<!-- wp:post-content {"className":"sw-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "sw-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"sw-tags"} /-->

<!-- wp:group {"className": "sw-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( seimitsu_works_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( seimitsu_works_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
