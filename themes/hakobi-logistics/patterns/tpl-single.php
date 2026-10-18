<?php
/**
 * Title: Note
 * Slug: hakobi-logistics/tpl-single
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Inserter: no
 * Description: One note: category, title, date, the picture, the text, tags and earlier / later links.
 */
?>
<!-- wp:group {"tagName": "article", "align": "full", "className": "hg-section hg-article", "layout": {"type": "constrained"}} -->
<article class="wp-block-group alignfull hg-section hg-article"><!-- wp:group {"className": "hg-article__head", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-article__head"><!-- wp:post-terms {"term":"category","className":"hg-eyebrow"} /-->

<!-- wp:post-title {"level":1,"className":"hg-pagehead__title"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hg-article__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"3/2","align":"wide","className":"hg-photo"} /-->

<!-- wp:post-content {"className":"hg-prose","layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className": "is-style-tone"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-tone"/>
<!-- /wp:separator -->

<!-- wp:group {"className": "hg-article__foot", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hg-tags"} /-->

<!-- wp:group {"className": "hg-post-nav", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hakobi_logistics_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hakobi_logistics_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
