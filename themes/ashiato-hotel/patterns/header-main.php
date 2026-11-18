<?php
/**
 * Title: Header: logo, one menu, booking pill
 * Slug: ashiato-hotel/header-main
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: Light header bar with the paw wordmark, the one top menu and the Book a room pill.
 */
?>
<!-- wp:group {"className":"ah-head","layout":{"type":"default"}} -->
<div class="wp-block-group ah-head"><!-- wp:html -->
<a class="ah-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo ashiato_hotel_icon( 'paw', 'ah-logo__paw' ); ?><span class="ah-logo__t"><?php echo esc_html( ashiato_hotel_t( 'logo_name' ) ); ?></span><span class="ah-logo__s"><?php echo esc_html( ashiato_hotel_t( 'logo_sub' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"ah-nav","layout":{"type":"flex","justifyContent":"left"}} /-->

<!-- wp:buttons {"className":"ah-pill-wrap ah-head__cta"} -->
<div class="wp-block-buttons ah-pill-wrap ah-head__cta"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_room' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
