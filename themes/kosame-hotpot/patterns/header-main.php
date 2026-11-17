<?php
/**
 * Title: Header: split menu and booking button
 * Slug: kosame-hotpot/header-main
 * Categories: kosame-hotpot
 * Keywords: hot pot, restaurant, booking
 * Viewport Width: 1440
 * Inserter: no
 * Description: Transparent header split across the photo stage seam: one menu in white on the photo half, the wordmark and the Book a table button on the paper half.
 */
?>
<!-- wp:group {"className":"ks-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bar"><!-- wp:group {"className":"ks-bar__l","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bar__l"><!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"paper","overlayTextColor":"ink","className":"ks-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-bar__r","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bar__r"><!-- wp:paragraph {"className":"ks-wordmark"} -->
<p class="ks-wordmark"><a href="<?php echo kosame_hotpot_url( '/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ks-head-book"} -->
<div class="wp-block-buttons ks-head-book"><!-- wp:button {"className":"ks-btn"} -->
<div class="wp-block-button ks-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo kosame_hotpot_url( '/book/' ); ?>"><?php echo esc_html( kosame_hotpot_t( 'book_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
