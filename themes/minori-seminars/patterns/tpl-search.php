<?php
/**
 * Title: Template: search
 * Slug: minori-seminars/tpl-search
 * Categories: minori-seminars
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ms-main ms-main--inner","layout":{"type":"default"}} -->
<main class="wp-block-group ms-main ms-main--inner"><!-- wp:pattern {"slug":"minori-seminars/inner-head-search"} /-->

<!-- wp:group {"align":"full","className":"ms-isec","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ms-isec"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><!-- wp:query {"queryId":1,"query":{"inherit":true},"className":"ms-posts"} -->
<div class="wp-block-query ms-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ms-thumb"} /-->

<!-- wp:post-date {"className":"ms-meta"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ms-ptitle"} /-->

<!-- wp:post-excerpt {"excerptLength":28} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( minori_seminars_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->