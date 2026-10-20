<?php
/**
 * Title: Article: one journal post
 * Slug: aozora-primary-school/tpl-single
 * Categories: aozora-primary-school
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"ap-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull ap-article"><!-- wp:group {"className":"ap-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-article__head"><!-- wp:group {"className":"ap-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ap-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( aozora_primary_school_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"ap-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"ap-article__picture"} /-->

<!-- wp:post-content {"className":"ap-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"ap-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ap-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( aozora_primary_school_t( 'tpl_single_01' ) ); ?>,"className":"ap-tags"} /-->

<!-- wp:group {"className":"ap-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group ap-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( aozora_primary_school_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( aozora_primary_school_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"aozora-primary-school/call-cta"} /-->
