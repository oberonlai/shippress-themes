<?php
/**
 * Title: Template: news index
 * Slug: asagiri-hotel/tpl-news
 * Categories: asagiri-hotel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-phead"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p08-apron-window.webp' ) ); ?>","dimRatio":45,"customOverlayColor":"#1B1B1A","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"isDark":true,"className":"ag-phead__photo sp-parallax"} -->
<div class="wp-block-cover is-dark ag-phead__photo sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-45 has-background-dim" style="background-color:#1B1B1A"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( asagiri_hotel_t( 'k120e3fc4' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p08-apron-window.webp' ) ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ag-phead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ag-phead__in"><!-- wp:paragraph {"className":"ag-time ag-phead__time"} -->
<p class="ag-time ag-phead__time"><?php echo wp_kses_post( asagiri_hotel_t( 'k27980420' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"ag-phead__t ag-rise1"} -->
<h1 class="wp-block-heading ag-phead__t ag-rise1"><?php echo wp_kses_post( asagiri_hotel_t( 'kdd1ba187' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ag-phead__sub ag-rise2"} -->
<p class="ag-phead__sub ag-rise2"><?php echo wp_kses_post( asagiri_hotel_t( 'k30b6236b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ag-newsbody","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-newsbody"><!-- wp:query {"queryId":11,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ag-newsq ag-newsq--first"} -->
<div class="wp-block-query ag-newsq ag-newsq--first"><!-- wp:post-template {"className":"ag-newsfirst__list"} -->
<!-- wp:group {"className":"ag-newsfirst","layout":{"type":"default"}} -->
<div class="wp-block-group ag-newsfirst"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-newsfirst__img"} /-->
<!-- wp:group {"className":"ag-newsfirst__t","layout":{"type":"default"}} -->
<div class="wp-block-group ag-newsfirst__t"><!-- wp:post-terms {"term":"category","className":"ag-time"} /-->
<!-- wp:post-date {"className":"ag-notes__d"} /-->
<!-- wp:post-title {"level":2,"isLink":true,"className":"ag-newsfirst__n"} /-->
<!-- wp:post-excerpt {"excerptLength":38,"className":"ag-notes__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
<!-- wp:query {"queryId":12,"query":{"perPage":8,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ag-newsq ag-newsq--grid"} -->
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
