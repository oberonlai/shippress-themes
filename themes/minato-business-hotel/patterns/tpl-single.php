<?php
/**
 * Title: Article: one journal note
 * Slug: minato-business-hotel/tpl-single
 * Categories: minato-business-hotel
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal note: category, date, title, the photograph, the text, tags, older and newer links, and the booking call.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"mb-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull mb-article"><!-- wp:group {"className":"mb-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group mb-article__head"><!-- wp:group {"className":"mb-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mb-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( minato_business_hotel_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"mb-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"mb-article__picture"} /-->

<!-- wp:post-content {"className":"mb-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"mb-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mb-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( minato_business_hotel_t( 'tpl_single_01' ) ); ?>,"className":"mb-tags"} /-->

<!-- wp:group {"className":"mb-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group mb-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( minato_business_hotel_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( minato_business_hotel_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"minato-business-hotel/call-cta"} /-->
