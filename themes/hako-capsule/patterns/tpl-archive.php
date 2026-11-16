<?php
/**
 * Title: Archive: journal
 * Slug: hako-capsule/tpl-archive
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: Journal, category and tag archives as ruled rows under a title band.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--archive","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--archive"><!-- wp:group {"className":"hk-title","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title"><!-- wp:query-title {"type":"archive","showPrefix":false,"level":2,"className":"hk-title__h"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-wall hk-wall--grid hk-wall--posts","layout":{"type":"default"}} -->
<div class="wp-block-group hk-wall hk-wall--grid hk-wall--posts"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hk-posts"} -->
<div class="wp-block-query hk-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hk-cell hk-cell--post","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell hk-cell--post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"hk-cell__img"} /-->

<!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:post-date {"format":"j M Y","className":"hk-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hk-cell__name"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"moreText":"","className":"hk-cell__spec"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:post-terms {"term":"category","className":"hk-price hk-price--term"} /-->

<!-- wp:read-more {"content":<?php echo wp_json_encode( hako_capsule_t( 'read_more' ) ); ?>,"className":"hk-arrowbox"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hk-pager","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hako_capsule_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hako_capsule_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"hk-body hk-noresults"} -->
<p class="hk-body hk-noresults"><?php echo esc_html( hako_capsule_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
