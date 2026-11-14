<?php
/**
 * Title: Header: tagline, wordmark and menu
 * Slug: utsushi-films/header-main
 * Categories: utsushi-films
 * Inserter: no
 * Viewport Width: 1440
 * Description: Transparent header over the first screen: two-line tagline left, centred wordmark, one menu right.
 */
?>
<!-- wp:group {"align":"full","className":"uf-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull uf-header"><!-- wp:group {"className":"uf-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group uf-header__in"><!-- wp:paragraph {"className":"uf-header__tag"} -->
<p class="uf-header__tag"><?php echo wp_kses_post( utsushi_films_t( 'k2b0ee050' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"level":0,"isLink":true,"className":"uf-header__brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"ground","overlayTextColor":"text","className":"uf-nav","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
