<?php
/**
 * Title: Template: archive
 * Slug: asagiri-hotel/tpl-archive
 * Categories: asagiri-hotel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ag-wrapin","layout":{"type":"default"}} -->
<div class="wp-block-group ag-wrapin"><!-- wp:group {"className":"ag-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ag-pagehead"><!-- wp:paragraph {"className":"ag-time"} -->
<p class="ag-time"><?php echo wp_kses_post( asagiri_hotel_t( 'kdd1ba187' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ag-title"} -->
<h1 class="wp-block-heading ag-title"><?php echo wp_kses_post( asagiri_hotel_t( 'k7f24e704' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ag-sub"} -->
<p class="ag-sub"><?php echo wp_kses_post( asagiri_hotel_t( 'k65a1ea8a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":2,"query":{"perPage":9,"postType":"post","inherit":true},"className":"ag-notes__q"} -->
<div class="wp-block-query ag-notes__q"><!-- wp:post-template {"className":"ag-notes__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-notes__img"} /-->
<!-- wp:post-date {"className":"ag-notes__d"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-notes__n"} /-->
<!-- wp:post-excerpt {"excerptLength":20,"className":"ag-notes__x"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
