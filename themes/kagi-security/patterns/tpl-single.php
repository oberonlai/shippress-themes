<?php
/**
 * Title: Article: one journal post
 * Slug: kagi-security/tpl-single
 * Categories: kagi-security
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: One journal post: category, date, title, the photograph, the text, tags and older and newer links.
 */
?>
<!-- wp:group {"tagName":"article","align":"full","className":"ks-article","layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull ks-article"><!-- wp:group {"className":"ks-article__head","layout":{"type":"default"}} -->
<div class="wp-block-group ks-article__head"><!-- wp:group {"className":"ks-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ks-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( kagi_security_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"className":"ks-article__title"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","className":"ks-article__picture"} /-->

<!-- wp:post-content {"className":"ks-prose","layout":{"type":"constrained"}} /-->

<!-- wp:group {"className":"ks-article__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ks-article__foot"><!-- wp:post-terms {"term":"post_tag","prefix":<?php echo wp_json_encode( kagi_security_t( 'tpl_single_01' ) ); ?>,"className":"ks-tags"} /-->

<!-- wp:group {"className":"ks-post-nav","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group ks-post-nav"><!-- wp:post-navigation-link {"type":"previous","label":<?php echo wp_json_encode( kagi_security_t( 'older' ) ); ?>,"showTitle":true} /-->

<!-- wp:post-navigation-link {"label":<?php echo wp_json_encode( kagi_security_t( 'newer' ) ); ?>,"showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kagi-security/call-cta"} /-->
