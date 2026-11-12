<?php
/**
 * Title: Header: split menu, wordmark and booking pill
 * Slug: nohara-park/header-main
 * Categories: nohara-park
 * Inserter: no
 * Viewport Width: 1440
 * Description: White sticky header: one menu on the left, the wordmark centred, the olive booking pill with its disc on the right.
 */
?>
<!-- wp:group {"align":"full","className":"np-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull np-header"><!-- wp:group {"className":"np-bar","layout":{"type":"default"}} -->
<div class="wp-block-group np-bar"><!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"ink","className":"np-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} /-->

<!-- wp:html -->
<a class="np-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg class="np-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" aria-hidden="true" focusable="false"><circle cx="7" cy="8" r="5.5" fill="#5F6848"/><circle cx="13.5" cy="9.500" r="4.500" fill="#5F6848" fill-opacity=".72"/><path d="M0 18.500h20" stroke="#1F1F1F" stroke-width="1"/></svg><span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:group {"className":"np-bar__book","layout":{"type":"default"}} -->
<div class="wp-block-group np-bar__book"><!-- wp:html -->
<a class="np-pill" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><span class="np-pill__label"><?php echo esc_html( nohara_park_t( 'pill_pitch' ) ); ?></span><span class="np-pill__disc" aria-hidden="true"><span><?php echo esc_html( nohara_park_t( 'disc_1' ) ); ?></span><span><?php echo esc_html( nohara_park_t( 'disc_2' ) ); ?></span></span></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
