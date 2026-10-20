<?php
/**
 * Title: Article: one journal note
 * Slug: hokuto-driving-school/tpl-single
 * Categories: hokuto-driving-school
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, date, title, the photograph, the text, tags, older and newer links, and the booking call.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"hk-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hk-article"><!-- wp:group {"className":"hk-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group hk-article__head"><!-- wp:group {"className":"hk-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hokuto_driving_school_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"hk-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"hk-article__picture"} /-->

<!-- wp:post-content {"className":"hk-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"hk-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( hokuto_driving_school_t( 'tpl_single_01' ) ); ?>,"className":"hk-tags"} /-->

<!-- wp:group {"className":"hk-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group hk-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( hokuto_driving_school_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( hokuto_driving_school_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hokuto-driving-school/book-cta"} /-->
