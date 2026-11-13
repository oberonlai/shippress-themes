<?php
/**
 * Title: Archive: post list
 * Slug: koori-coldstore/tpl-archive-list
 * Categories: koori-coldstore
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Journal head with the archive title, then ruled topic rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kc-posts"} -->
<div class="wp-block-query kc-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-post","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"kc-post__photo"} /-->

<!-- wp:group {"className":"kc-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post__text"><!-- wp:post-title {"level":3,"isLink":true,"className":"kc-post__title"} /-->

<!-- wp:group {"className":"kc-post__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group kc-post__meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j F Y"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( koori_coldstore_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( koori_coldstore_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koori_coldstore_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
