<?php
/**
 * Title: Article: one journal note
 * Slug: kasumi-mortgage/tpl-single
 * Categories: kasumi-mortgage
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, date, title, the photograph, the text, tags, older and newer links, and the booking call.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"km-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull km-article"><!-- wp:group {"className":"km-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group km-article__head"><!-- wp:group {"className":"km-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group km-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( kasumi_mortgage_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"km-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"km-article__picture"} /-->

<!-- wp:post-content {"className":"km-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"km-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group km-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( kasumi_mortgage_t( 'tpl_single_01' ) ); ?>,"className":"km-tags"} /-->

<!-- wp:group {"className":"km-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group km-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kasumi_mortgage_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( kasumi_mortgage_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kasumi-mortgage/call-cta"} /-->
