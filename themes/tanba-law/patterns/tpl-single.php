<?php
/**
 * Title: Note
 * Slug: tanba-law/tpl-single
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "tb-section tb-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull tb-section tb-article"><!-- wp:group {"className": "tb-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-article__head"><!-- wp:post-terms {"term":"category","className":"tb-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"tb-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"tb-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"tb-photo"} /-->

<!-- wp:post-content {"className":"tb-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "tb-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"tb-tags"} /-->

<!-- wp:group {"className": "tb-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( tanba_law_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( tanba_law_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
