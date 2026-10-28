<?php
/**
 * Title: Header: split nav
 * Slug: kama-cookware/header-split
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Inserter: no
 * Description: Three links left, wordmark centre, three links right.
 */
?>
<!-- wp:group {"className":"km-hdr","layout":{"type":"default"}} -->
<div class="wp-block-group km-hdr"><!-- wp:navigation {"overlayMenu":"mobile","className":"km-nav km-nav--l","layout":{"type":"flex","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_1' ) ); ?>","url":"<?php echo esc_url( home_url( '/shop/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_2' ) ); ?>","url":"<?php echo esc_url( home_url( '/which-pan/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_3' ) ); ?>","url":"<?php echo esc_url( home_url( '/seasoning-care/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_4' ) ); ?>","url":"<?php echo esc_url( home_url( '/repair-service/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_5' ) ); ?>","url":"<?php echo esc_url( home_url( '/journal/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"<?php echo esc_attr( kama_cookware_t( 'nav_6' ) ); ?>","url":"<?php echo esc_url( home_url( '/visit/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:site-title {"level":0,"isLink":true,"className":"km-brand"} /-->

<!-- wp:group {"className":"km-hdr__r","layout":{"type":"default"}} -->
<div class="wp-block-group km-hdr__r"><!-- wp:html -->
<nav class="wp-block-navigation km-nav km-nav--r"><ul class="wp-block-navigation__container"><li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_4' ) ); ?></a></li><li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_5' ) ); ?></a></li><li class="wp-block-navigation-item"><a class="wp-block-navigation-item__content" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'nav_6' ) ); ?></a></li></ul></nav>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
