<?php
/**
 * Title: Journal entry
 * Slug: hatoba-college/tpl-single
 * Categories: hatoba-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category label, serif title, date, the featured photograph in the framed window, the text and neighbouring entries.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hc-sec hc-article","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull hc-sec hc-article"><!-- wp:group {"className":"hc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group hc-pagehead"><!-- wp:post-terms {"term":"category","className":"hc-label"} /-->

<!-- wp:post-title {"level":1,"className":"hc-h1 hc-h1--page"} /-->

<!-- wp:post-date {"format":"j F Y","className":"hc-post__meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"2.42/1","className":"hc-feature"} /-->

<!-- wp:post-content {"className":"hc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"hc-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"hc-tags"} /-->

<!-- wp:group {"className":"hc-post-nav","layout":{"type":"default"}} -->
<div class="wp-block-group hc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hatoba_college_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( hatoba_college_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->