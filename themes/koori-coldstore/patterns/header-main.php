<?php
/**
 * Title: Header: utility row, wordmark, menu and call button
 * Slug: koori-coldstore/header-main
 * Categories: koori-coldstore
 * Keywords: cold storage, warehouse, logistics
 * Viewport Width: 1440
 * Inserter: no
 * Description: Two-row sticky header: a plain utility row with dock hours and phone, then the wordmark, one anchor menu and the Ask about capacity button.
 */
?>
<!-- wp:group {"align":"full","className":"kc-header__util","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header__util"><!-- wp:paragraph {"className":"kc-util"} -->
<p class="kc-util"><?php echo esc_html( koori_coldstore_t( 'util_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-util"} -->
<p class="kc-util"><a href="tel:+100103774120"><?php echo esc_html( koori_coldstore_t( 'util_phone' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header__bar"><!-- wp:paragraph {"className":"kc-wordmark"} -->
<p class="kc-wordmark"><a href="<?php echo koori_coldstore_url( '/' ); ?>"><span class="kc-wordmark__name"><?php echo esc_html( koori_coldstore_t( 'wm_name' ) ); ?></span><span class="kc-wordmark__sub"><?php echo esc_html( koori_coldstore_t( 'wm_sub' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"kc-header__cta"} -->
<div class="wp-block-buttons kc-header__cta"><!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo koori_coldstore_url( '/ask/' ); ?>"><span class="kc-cta-full"><?php echo esc_html( koori_coldstore_t( 'cta_ask' ) ); ?></span><span class="kc-cta-short"><?php echo esc_html( koori_coldstore_t( 'cta_ask_short' ) ); ?></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
