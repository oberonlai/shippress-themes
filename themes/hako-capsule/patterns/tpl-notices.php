<?php
/**
 * Title: Journal: posts page
 * Slug: hako-capsule/tpl-notices
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Inserter: no
 * Description: The posts page: a title band and the journal as ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--archive","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--archive"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'ar_h1_news' ) ); ?></h2>
<!-- /wp:heading --></div>
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
<!-- /wp:query -->

<!-- wp:group {"className":"hk-cell hk-cell--letter","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell hk-cell--letter"><!-- wp:group {"className":"hk-cell__body","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__body"><!-- wp:paragraph {"className":"hk-chip"} -->
<p class="hk-chip"><?php echo esc_html( hako_capsule_t( 'jl_c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"hk-cell__name"} -->
<h3 class="wp-block-heading hk-cell__name"><?php echo esc_html( hako_capsule_t( 'let_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-cell__spec"} -->
<p class="hk-cell__spec"><?php echo esc_html( hako_capsule_t( 'let_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-cell__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hk-cell__foot"><!-- wp:paragraph {"className":"hk-price"} -->
<p class="hk-price"><?php echo esc_html( hako_capsule_t( 'jl_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-arrow"} -->
<p class="hk-arrow"><a href="<?php echo hako_capsule_url( '/letter/' ); ?>"><span class="hk-sr"><?php echo esc_html( hako_capsule_t( 'jl_aria' ) ); ?></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
