<?php
/**
 * Title: Template: search
 * Slug: tayori-nursing/tpl-search
 * Categories: tayori-nursing
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tn-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group tn-main" style="margin-top:0"><!-- wp:pattern {"slug":"tayori-nursing/head-search"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"tn-sec tn-posts-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tn-sec tn-posts-sec"><!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"tn-posts"} -->
<div class="wp-block-query alignwide tn-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"tn-posts__img"} /-->

<!-- wp:post-terms {"term":"category","className":"tn-label"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"tn-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tayori_nursing_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->