<?php
/**
 * Title: Archive: head and list
 * Slug: hatoba-college/tpl-archive
 * Categories: hatoba-college
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Journal head with the archive title, then ruled topic rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-sec hc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sec hc-pagehead"><!-- wp:paragraph {"className":"hc-label"} -->
<p class="hc-label"><?php echo esc_html( hatoba_college_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hc-h1 hc-h1--page"} /-->

<!-- wp:term-description {"className":"hc-body"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hc-sec hc-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-sec hc-list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hc-posts"} -->
<div class="wp-block-query hc-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hc-post","layout":{"type":"default"}} -->
<div class="wp-block-group hc-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"hc-post__photo"} /-->

<!-- wp:group {"className":"hc-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-post__text"><!-- wp:post-title {"level":3,"isLink":true,"className":"hc-post__title"} /-->

<!-- wp:group {"className":"hc-post__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group hc-post__meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"j F Y"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hatoba_college_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hatoba_college_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hatoba_college_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->