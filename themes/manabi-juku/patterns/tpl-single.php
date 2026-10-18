<?php
/**
 * Title: Note
 * Slug: manabi-juku/tpl-single
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "mj-section mj-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull mj-section mj-article"><!-- wp:group {"className": "mj-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-article__head"><!-- wp:post-terms {"term":"category","className":"mj-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"mj-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"mj-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"mj-photo"} /-->

<!-- wp:post-content {"className":"mj-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "mj-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"mj-tags"} /-->

<!-- wp:group {"className": "mj-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( manabi_juku_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( manabi_juku_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
