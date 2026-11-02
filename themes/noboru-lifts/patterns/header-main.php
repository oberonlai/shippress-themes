<?php
/**
 * Title: Header: brand, menu and call button
 * Slug: noboru-lifts/header-main
 * Categories: noboru-lifts
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"nl-bar","layout":{"type":"default"}} -->
<div class="wp-block-group nl-bar"><!-- wp:group {"className":"nl-brand","layout":{"type":"default"}} -->
<div class="wp-block-group nl-brand"><!-- wp:site-title {"level":0,"isLink":true,"className":"nl-brand__name"} /-->

<!-- wp:paragraph {"className":"nl-brand__sub"} -->
<p class="nl-brand__sub"><?php echo wp_kses_post( noboru_lifts_t( 'k957c8642' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"nl-menu","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:paragraph {"className":"nl-cta"} -->
<p class="nl-cta"><a href="<?php echo esc_url( home_url( '/#book' ) ); ?>"><?php echo wp_kses_post( noboru_lifts_t( 'k7138f381' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
