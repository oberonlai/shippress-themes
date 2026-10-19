<?php
/**
 * Title: Note
 * Slug: hanamizuki-dental/tpl-single
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hd-section hd-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hd-section hd-article"><!-- wp:group {"className": "hd-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-article__head"><!-- wp:post-terms {"term":"category","className":"hd-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hd-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hd-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hd-photo"} /-->

<!-- wp:post-content {"className":"hd-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hd-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hd-tags"} /-->

<!-- wp:group {"className": "hd-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hd-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hanamizuki_dental_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hanamizuki_dental_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
