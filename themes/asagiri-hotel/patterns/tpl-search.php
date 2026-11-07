<?php
/**
 * Title: Template: search
 * Slug: asagiri-hotel/tpl-search
 * Categories: asagiri-hotel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-phead ag-phead--ink","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-phead ag-phead--ink"><!-- wp:group {"className":"ag-phead__photo ag-phead__photo--ink","layout":{"type":"default"}} -->
<div class="wp-block-group ag-phead__photo ag-phead__photo--ink"><!-- wp:group {"className":"ag-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ag-phead__in"><!-- wp:paragraph {"className":"ag-time"} -->
<p class="ag-time"><?php echo wp_kses_post( asagiri_hotel_t( 'k13348442' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:query-title {"type":"search","level":1,"className":"ag-phead__t"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ag-newsbody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-newsbody"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"ag-search"} /-->
<!-- wp:query {"queryId":13,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"ag-newsq ag-newsq--grid"} -->
<div class="wp-block-query ag-newsq ag-newsq--grid"><!-- wp:post-template {"className":"ag-notes__list","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-notes__img"} /-->
<!-- wp:post-terms {"term":"category","className":"ag-time"} /-->
<!-- wp:post-date {"className":"ag-notes__d"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-notes__n"} /-->
<!-- wp:post-excerpt {"excerptLength":22,"className":"ag-notes__x"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
