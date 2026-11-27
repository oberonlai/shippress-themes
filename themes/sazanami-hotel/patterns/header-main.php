<?php
/**
 * Title: Header: wordmark, centred menu, booking link
 * Slug: sazanami-hotel/header-main
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Transparent sticky header: wordmark at the left, one centred lower-case menu with a dot on the current item, and the booking link at the right. The ink inverts over dark grounds.
 */
?>
<!-- wp:group {"className":"sz-head","layout":{"type":"default"}} -->
<div class="wp-block-group sz-head"><!-- wp:html -->
<a class="sz-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'logo_name' ) ); ?></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"sz-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:html -->
<a class="sz-book" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span><?php echo esc_html( sazanami_hotel_t( 'book_link' ) ); ?></span><?php echo sazanami_hotel_icon( 'calendar', 'sz-cal' ); ?></a>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

