<?php
/**
 * Title: Header
 * Slug: akari-hotel/head-main
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink header: stacked links at the left, the wordmark centred, the Enquire pill at the right.
 */
?>
<!-- wp:group {"className":"ak-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ak-header"><!-- wp:navigation {"overlayMenu":"mobile","textColor":"white","overlayBackgroundColor":"ink","overlayTextColor":"white","className":"ak-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<!-- wp:paragraph {"className":"ak-brand"} -->
<p class="ak-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ak-header__cta","layout":{"type":"default"}} -->
<div class="wp-block-group ak-header__cta"><!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-pill"} -->
<div class="wp-block-button ak-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/enquire/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'enquire' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
