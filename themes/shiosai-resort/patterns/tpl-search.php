<?php
/**
 * Title: Template: search
 * Slug: shiosai-resort/tpl-search
 * Categories: shiosai-resort
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"ss-main ss-main--archive","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull ss-main ss-main--archive"><!-- wp:group {"className":"ss-archive","layout":{"type":"default"}} -->
<div class="wp-block-group ss-archive"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"<?php echo esc_attr( shiosai_resort_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( shiosai_resort_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ss-journal__t"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( shiosai_resort_t( 'date_fmt' ) ); ?>","className":"ss-journal__d"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->