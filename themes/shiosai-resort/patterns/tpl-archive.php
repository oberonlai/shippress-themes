<?php
/**
 * Title: Template: archive
 * Slug: shiosai-resort/tpl-archive
 * Categories: shiosai-resort
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"ss-main ss-main--archive","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull ss-main ss-main--archive"><!-- wp:group {"tagName":"section","align":"full","className":"ss-archive-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ss-archive-sec"><!-- wp:group {"className":"ss-head","layout":{"type":"default"}} -->
<div class="wp-block-group ss-head"><!-- wp:paragraph {"className":"ss-head__eyebrow"} -->
<p class="ss-head__eyebrow"><?php echo wp_kses_post( shiosai_resort_t( 'kfb9141b4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1} /-->

<!-- wp:paragraph {"className":"ss-head__sub"} -->
<p class="ss-head__sub"><?php echo wp_kses_post( shiosai_resort_t( 'k1e6ca4b2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-terms {"term":"category","className":"ss-journal__c"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ss-journal__t"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( shiosai_resort_t( 'date_fmt' ) ); ?>","className":"ss-journal__d"} /-->

<!-- wp:post-excerpt {"excerptLength":22} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->