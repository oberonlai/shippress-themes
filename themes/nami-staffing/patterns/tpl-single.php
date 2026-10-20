<?php
/**
 * Title: Article: one journal post
 * Slug: nami-staffing/tpl-single
 * Categories: nami-staffing
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"ns-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull ns-article"><!-- wp:group {"className":"ns-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group ns-article__head"><!-- wp:group {"className":"ns-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ns-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( nami_staffing_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"ns-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"ns-article__picture"} /-->

<!-- wp:post-content {"className":"ns-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"ns-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ns-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( nami_staffing_t( 'tpl_single_01' ) ); ?>,"className":"ns-tags"} /-->

<!-- wp:group {"className":"ns-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group ns-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( nami_staffing_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( nami_staffing_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"nami-staffing/call-cta"} /-->
