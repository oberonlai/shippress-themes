<?php
/**
 * Title: Note
 * Slug: hirameki-lab/tpl-single
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hl-section hl-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hl-section hl-article"><!-- wp:group {"className": "hl-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-article__head"><!-- wp:post-terms {"term":"category","className":"hl-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hl-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hl-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hl-photo"} /-->

<!-- wp:post-content {"className":"hl-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hl-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hl-tags"} /-->

<!-- wp:group {"className": "hl-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hl-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hirameki_lab_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hirameki_lab_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
