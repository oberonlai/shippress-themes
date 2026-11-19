<?php
/**
 * Title: Header: wordmark, one overlay menu, Reserve
 * Slug: sumibi-yakiniku/header-main
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: Overlay header: the two-line wordmark in the blush gutter, the one top menu in white over the photograph, the chestnut Reserve button and the two fixed edge links.
 */
?>
<!-- wp:group {"className":"sy-head","layout":{"type":"default"}} -->
<div class="wp-block-group sy-head"><!-- wp:paragraph {"className":"sy-wordmark"} -->
<p class="sy-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo sumibi_yakiniku_lines( 'logo_name' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sy-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:buttons {"className":"sy-head__btn"} -->
<div class="wp-block-buttons sy-head__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'btn_reserve' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"sy-edge sy-edge--left"} -->
<p class="sy-edge sy-edge--left"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'edge_reserve' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-edge sy-edge--right"} -->
<p class="sy-edge sy-edge--right"><a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( sumibi_yakiniku_t( 'edge_map' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
