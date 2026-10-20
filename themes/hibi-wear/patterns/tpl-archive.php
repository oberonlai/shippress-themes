<?php
/**
 * Title: Archive: head and list
 * Slug: hibi-wear/tpl-archive
 * Categories: hibi-wear
 * Keywords: clothing, shop, apparel
 * Viewport Width: 1440
 * Inserter: no
 * Description: T1 head with the archive title, then the entries.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-pagehead hw-pagehead--plain","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-pagehead hw-pagehead--plain"><!-- wp:group {"align":"wide","className":"hw-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hw-head"><!-- wp:paragraph {"className":"hw-label"} -->
<p class="hw-label"><?php echo esc_html( hibi_wear_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hw-h hw-h--page"} /-->

<!-- wp:term-description {"className":"hw-lead"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hw-sec hw-list","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hw-sec hw-list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hw-notes hw-notes--index"} -->
<div class="wp-block-query alignwide hw-notes hw-notes--index"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hw-note__img"} /-->

<!-- wp:group {"className":"hw-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hw-note__text"><!-- wp:post-terms {"term":"category","className":"hw-note__cat"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"hw-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hw-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hw-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hibi_wear_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hibi_wear_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hibi_wear_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
