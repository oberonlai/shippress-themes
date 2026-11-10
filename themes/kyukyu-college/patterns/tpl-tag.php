<?php
/**
 * Title: Template: tag
 * Slug: kyukyu-college/tpl-tag
 * Categories: kyukyu-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kk-main","layout":{"type":"default"}} -->
<main class="wp-block-group kk-main"><!-- wp:group {"className":"kk-wrap kk-pagephoto","layout":{"type":"default"}} -->
<div class="wp-block-group kk-wrap kk-pagephoto"><!-- wp:query {"queryId":3,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"kk-polys sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group kk-polys sp-parallax"><!-- wp:post-featured-image {"isLink":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kk-sec kk-wrap kk-notes-page","layout":{"type":"default"}} -->
<div class="wp-block-group kk-sec kk-wrap kk-notes-page"><!-- wp:paragraph {"className":"kk-word kk-wordpad"} -->
<p class="kk-word kk-wordpad"><?php echo wp_kses_post( kyukyu_college_t( 'ke444f739' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kk-sub kk-notes-sub"} -->
<p class="kk-sub kk-notes-sub"><?php echo wp_kses_post( kyukyu_college_t( 'k00fefc53' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"kk-pagetitle"} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kk-cards-q","layout":{"type":"default"}} -->
<div class="wp-block-query kk-cards-q"><!-- wp:post-template {"className":"kk-cards","layout":{"type":"default"}} -->
<!-- wp:group {"className":"kk-card","layout":{"type":"default"}} -->
<div class="wp-block-group kk-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"kk-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group kk-card__body"><!-- wp:post-terms {"term":"category","className":"kk-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kk-card__title"} /-->

<!-- wp:post-date {"className":"kk-card__date"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kyukyu_college_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->