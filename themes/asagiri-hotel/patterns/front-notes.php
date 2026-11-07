<?php
/**
 * Title: Home: night notes, three newest posts
 * Slug: asagiri-hotel/front-notes
 * Categories: asagiri-hotel
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-notes","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-notes"><!-- wp:group {"className":"ag-open ag-open--s","layout":{"type":"default"}} -->
<div class="wp-block-group ag-open ag-open--s"><!-- wp:group {"className":"ag-open__head","layout":{"type":"default"}} -->
<div class="wp-block-group ag-open__head"><!-- wp:paragraph {"className":"ag-time"} -->
<p class="ag-time"><?php echo wp_kses_post( asagiri_hotel_t( 'k27980420' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ag-open__t ag-open__t--m"} -->
<h2 class="wp-block-heading ag-open__t ag-open__t--m"><?php echo wp_kses_post( asagiri_hotel_t( 'k7f24e704' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ag-open__text","layout":{"type":"default"}} -->
<div class="wp-block-group ag-open__text"><!-- wp:paragraph {"className":"ag-pill "} -->
<p class="ag-pill "><a href="/news/"><?php echo wp_kses_post( asagiri_hotel_t( 'k67bfaf2f' ) ); ?><span class="ag-arr" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ag-notes__q"} -->
<div class="wp-block-query ag-notes__q"><!-- wp:post-template {"className":"ag-notes__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-notes__img"} /-->
<!-- wp:post-date {"className":"ag-notes__d"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-notes__n"} /-->
<!-- wp:post-excerpt {"excerptLength":20,"className":"ag-notes__x"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
