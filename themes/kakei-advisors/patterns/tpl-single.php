<?php
/**
 * Title: Note
 * Slug: kakei-advisors/tpl-single
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "ka-section ka-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull ka-section ka-article"><!-- wp:group {"className": "ka-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-article__head"><!-- wp:post-terms {"term":"category","className":"ka-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"ka-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"ka-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"ka-photo"} /-->

<!-- wp:post-content {"className":"ka-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "ka-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"ka-tags"} /-->

<!-- wp:group {"className": "ka-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kakei_advisors_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( kakei_advisors_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
