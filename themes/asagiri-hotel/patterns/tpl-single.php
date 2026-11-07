<?php
/**
 * Title: Template: single post
 * Slug: asagiri-hotel/tpl-single
 * Categories: asagiri-hotel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-phead"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":45,"customOverlayColor":"#1B1B1A","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"isDark":true,"className":"ag-phead__photo ag-phead__photo--post sp-parallax"} -->
<div class="wp-block-cover is-dark ag-phead__photo ag-phead__photo--post sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-45 has-background-dim" style="background-color:#1B1B1A"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ag-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ag-phead__in"><!-- wp:post-terms {"term":"category","className":"ag-time ag-phead__time"} /-->
<!-- wp:post-title {"level":1,"className":"ag-phead__t ag-rise1"} /-->
<!-- wp:post-date {"className":"ag-phead__sub ag-rise2"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ag-singlebody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-singlebody"><!-- wp:post-content {"layout":{"type":"constrained","contentSize":"680px"}} /-->
<!-- wp:post-terms {"term":"post_tag","separator":" · ","className":"ag-single__tags"} /-->
<!-- wp:paragraph {"className":"ag-pill"} -->
<p class="ag-pill"><a href="/news/"><?php echo wp_kses_post( asagiri_hotel_t( 'k67bfaf2f' ) ); ?><span class="ag-arr" aria-hidden="true"><svg width="16" height="10" viewBox="0 0 16 10" fill="none" stroke="currentColor" stroke-width="1" focusable="false"><path d="M0 5h15M11 1l4 4-4 4"/></svg></span></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
