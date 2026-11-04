<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: tayori-nursing/header-main
 * Categories: tayori-nursing
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"tn-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull tn-header"><!-- wp:group {"align":"wide","className":"tn-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tn-header__bar"><!-- wp:site-title {"level":0,"className":"tn-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"tn-menu","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:group {"className":"tn-header__end","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group tn-header__end"><!-- wp:buttons {"className":"tn-header__cta"} -->
<div class="wp-block-buttons tn-header__cta"><!-- wp:button {"className":"tn-cta"} -->
<div class="wp-block-button tn-cta"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo wp_kses_post( tayori_nursing_t( 'ka7303000' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"tn-call-sq"} -->
<p class="tn-call-sq"><a href="tel:+15550147"><?php echo wp_kses_post( tayori_nursing_t( 'kc3755e61' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
