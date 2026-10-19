<?php
/**
 * Title: Note
 * Slug: tsunagu-systems/tpl-single
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "ts-section ts-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull ts-section ts-article"><!-- wp:group {"className": "ts-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-article__head"><!-- wp:post-terms {"term":"category","className":"ts-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"ts-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ts-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"ts-photo"} /-->

<!-- wp:post-content {"className":"ts-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "ts-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"ts-tags"} /-->

<!-- wp:group {"className": "ts-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group ts-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tsunagu_systems_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( tsunagu_systems_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
