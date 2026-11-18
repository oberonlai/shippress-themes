<?php
/**
 * Title: Header: bay stamp, one split menu, wordmark
 * Slug: soko-hotel/header-main
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: Warm-black top bar: the bay stamp, the one top menu split around the centred wordmark, and the two fixed edge labels.
 */
?>
<!-- wp:group {"className":"sk-head","layout":{"type":"default"}} -->
<div class="wp-block-group sk-head"><!-- wp:html -->
<a class="sk-head__stamp" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo soko_hotel_a( 'logo_name' ); ?>"><?php echo soko_hotel_icon( 'stamp', 'sk-stamp' ); ?></a>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sk-wordmark"} -->
<p class="sk-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sk-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:paragraph {"className":"sk-edge sk-edge--left"} -->
<p class="sk-edge sk-edge--left"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'edge_reserve' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-edge sk-edge--right"} -->
<p class="sk-edge sk-edge--right"><a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'edge_door' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
