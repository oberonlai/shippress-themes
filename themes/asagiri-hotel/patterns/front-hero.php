<?php
/**
 * Title: Home: inset night photograph with tagline
 * Slug: asagiri-hotel/front-hero
 * Categories: asagiri-hotel
 * Viewport Width: 1440
 * Description: Pale head band, a dark photograph inset 30 px, a centred two-line tagline with a counting year and two booking tiles.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ag-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ag-hero"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-key-card.webp' ) ); ?>","dimRatio":30,"customOverlayColor":"#1B1B1A","isUserOverlayColor":true,"isDark":true,"className":"ag-hero__photo sp-parallax"} -->
<div class="wp-block-cover is-dark ag-hero__photo sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#1B1B1A"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( asagiri_hotel_t( 'k68031e0d' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/demo/p01-key-card.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ag-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group ag-hero__in"><!-- wp:group {"className":"ag-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group ag-hero__top"></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ag-hero__mid","layout":{"type":"default"}} -->
<div class="wp-block-group ag-hero__mid"><!-- wp:heading {"level":1,"className":"ag-hero__h1 ag-rise1"} -->
<h1 class="wp-block-heading ag-hero__h1 ag-rise1"><?php echo wp_kses_post( asagiri_hotel_t( 'ka7fd3f55' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ag-hero__sub sp-count ag-rise2"} -->
<p class="ag-hero__sub sp-count ag-rise2"><?php echo wp_kses_post( asagiri_hotel_t( 'k7f52f8ec' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ag-scroll"} -->
<p class="ag-scroll"><?php echo wp_kses_post( asagiri_hotel_t( 'k105078d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- wp:group {"className":"ag-tiles","layout":{"type":"default"}} -->
<div class="wp-block-group ag-tiles"><!-- wp:paragraph {"className":"ag-tile"} -->
<p class="ag-tile"><a href="/rates/"><?php echo wp_kses_post( asagiri_hotel_t( 'k88497539' ) ); ?><br><?php echo wp_kses_post( asagiri_hotel_t( 'k8f152109' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ag-tile"} -->
<p class="ag-tile"><a href="/late-check-in/"><?php echo wp_kses_post( asagiri_hotel_t( 'k5baa5b04' ) ); ?><br><?php echo wp_kses_post( asagiri_hotel_t( 'k61ebab6d' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
