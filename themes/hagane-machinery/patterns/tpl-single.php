<?php
/**
 * Title: Article: one news post
 * Slug: hagane-machinery/tpl-single
 * Categories: hagane-machinery
 * Keywords: news, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One news post: category, date, title, the photograph, the text, tags, older and newer links, and the quotation call.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hm-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hm-article"><!-- wp:group {"className":"hm-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group hm-article__head"><!-- wp:group {"className":"hm-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hm-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hagane_machinery_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"hm-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"hm-article__picture"} /-->

<!-- wp:post-content {"className":"hm-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"hm-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hm-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( hagane_machinery_t( 'tpl_single_01' ) ); ?>,"className":"hm-tags"} /-->

<!-- wp:group {"className":"hm-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hm-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hagane_machinery_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( hagane_machinery_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hagane-machinery/call-cta"} /-->
