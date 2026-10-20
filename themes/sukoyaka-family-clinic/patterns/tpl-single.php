<?php
/**
 * Title: Article: one journal post
 * Slug: sukoyaka-family-clinic/tpl-single
 * Categories: sukoyaka-family-clinic
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"sf-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull sf-article"><!-- wp:group {"className":"sf-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group sf-article__head"><!-- wp:group {"className":"sf-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group sf-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"sf-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"sf-article__picture"} /-->

<!-- wp:post-content {"className":"sf-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"sf-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group sf-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'tpl_single_01' ) ); ?>,"className":"sf-tags"} /-->

<!-- wp:group {"className":"sf-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group sf-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"sukoyaka-family-clinic/call-cta"} /-->
