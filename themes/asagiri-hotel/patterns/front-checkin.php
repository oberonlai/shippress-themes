<?php
/**
 * Title: Home: 00:30 late check-in, wide photo with card
 * Slug: asagiri-hotel/front-checkin
 * Categories: asagiri-hotel
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-checkin","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-checkin"><!-- wp:group {"className":"ag-checkin__frame","layout":{"type":"default"}} -->
<div class="wp-block-group ag-checkin__frame"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"sp-reveal sp-reveal--wipe ag-checkin__img"} -->
<figure class="wp-block-image size-full sp-reveal sp-reveal--wipe ag-checkin__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p06-lobby-envelope.webp' ) ); ?>" alt="<?php echo esc_attr( asagiri_hotel_t( 'k9d0790ff' ) ); ?>" style="aspect-ratio:16/9;object-fit:cover;object-position:50% 50%"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"ag-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ag-card sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ag-time"} -->
<p class="ag-time"><?php echo wp_kses_post( asagiri_hotel_t( 'ke7778287' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ag-card__t"} -->
<h2 class="wp-block-heading ag-card__t"><?php echo wp_kses_post( asagiri_hotel_t( 'kbd86c04b' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ag-card__p"} -->
<p class="ag-card__p"><?php echo wp_kses_post( asagiri_hotel_t( 'k157390f0' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ag-pill "} -->
<p class="ag-pill "><a href="/late-check-in/"><?php echo wp_kses_post( asagiri_hotel_t( 'k5baa5b04' ) ); ?><span class="ag-arr" aria-hidden="true"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
