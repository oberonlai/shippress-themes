<?php
/**
 * Title: Search results
 * Slug: katachi-ergonomics/tpl-search
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk
 * Viewport Width: 1440
 * Inserter: no
 * Description: Search head with the query, then ruled rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ke-sec ke-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ke-sec ke-pagehead"><!-- wp:paragraph {"className":"ke-label"} -->
<p class="ke-label"><?php echo esc_html( katachi_ergonomics_t( 'search_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","className":"ke-h1 ke-h1--page"} /-->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"ke-search"} /-->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ke-sec ke-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ke-sec ke-list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ke-posts"} -->
<div class="wp-block-query ke-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"ke-post","layout":{"type":"default"}} -->
<div class="wp-block-group ke-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.84","className":"ke-post__photo"} /-->

<!-- wp:group {"className":"ke-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group ke-post__text"><!-- wp:group {"className":"ke-post__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ke-post__meta"><!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ke-post__title"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( katachi_ergonomics_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
