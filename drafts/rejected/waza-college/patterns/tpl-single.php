<?php
/**
 * Title: Note
 * Slug: waza-college/tpl-single
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "wz-section wz-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull wz-section wz-article"><!-- wp:group {"className": "wz-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-article__head"><!-- wp:post-terms {"term":"category","className":"wz-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"wz-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"wz-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"wz-photo"} /-->

<!-- wp:post-content {"className":"wz-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "wz-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"wz-tags"} /-->

<!-- wp:group {"className": "wz-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group wz-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( waza_college_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( waza_college_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
