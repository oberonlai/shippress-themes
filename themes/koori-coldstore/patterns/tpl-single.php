<?php
/**
 * Title: Journal entry
 * Slug: koori-coldstore/tpl-single
 * Categories: koori-coldstore
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category label, serif title, date, the featured photograph in the framed window, the text and neighbouring entries.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"kc-sec kc-article","layout":{"type":"default"}} -->
<article class="wp-block-group alignfull kc-sec kc-article"><!-- wp:group {"className":"kc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pagehead"><!-- wp:post-terms {"term":"category","className":"kc-label"} /-->

<!-- wp:post-title {"level":1,"className":"kc-h1 kc-h1--page"} /-->

<!-- wp:post-date {"format":"j F Y","className":"kc-post__meta"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"2.42/1","className":"kc-feature"} /-->

<!-- wp:post-content {"className":"kc-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"kc-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group kc-article__foot"><!-- wp:post-terms {"term":"post_tag","className":"kc-tags"} /-->

<!-- wp:group {"className":"kc-post-nav","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( koori_coldstore_t( 'earlier' ) ); ?>,"showTitle":true,"linkLabel":true} /-->

<!-- wp:post-navigation-link {"textAlign":"right","label":<?php echo wp_json_encode( koori_coldstore_t( 'later' ) ); ?>,"showTitle":true,"linkLabel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->