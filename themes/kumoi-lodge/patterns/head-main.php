<?php
/**
 * Title: Header
 * Slug: kumoi-lodge/head-main
 * Categories: kumoi-lodge
 * Keywords: lodge, header, navigation
 * Viewport Width: 1440
 * Description: Top bar: serif wordmark at the left, the menu and an outline "Hold a room" pill at the right. White inside the framed window on the home page, ink on the pale ground elsewhere.
 */
?>
<!-- wp:group {"className":"km-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull km-header"><!-- wp:group {"className":"km-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group km-header__bar"><!-- wp:paragraph {"className":"km-brand"} -->
<p class="km-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php kumoi_lodge_e( 'wordmark' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"lichen","overlayTextColor":"ink","className":"km-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->
<!-- wp:buttons {"className":"km-pills km-pills--head"} -->
<div class="wp-block-buttons km-pills km-pills--head"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/rates-and-booking/' ) ); ?>"><?php kumoi_lodge_e( 'hold' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
