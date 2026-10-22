<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: yui-credit-union/header-main
 * Categories: yui-credit-union
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"ycu-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ycu-header"><!-- wp:group {"className":"ycu-bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group ycu-bar"><!-- wp:site-title {"level":0,"className":"ycu-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"ycu-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"ycu-pills","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons ycu-pills"><!-- wp:button {"className":"ycu-btn ycu-btn--ghost ycu-hide-s"} -->
<div class="wp-block-button ycu-btn ycu-btn--ghost ycu-hide-s"><a class="wp-block-button__link wp-element-button" href="/branches/"><?php echo wp_kses_post( yui_credit_union_t( 'kdfc7e74a' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"ycu-btn ycu-btn--ghost ycu-hide-s"} -->
<div class="wp-block-button ycu-btn ycu-btn--ghost ycu-hide-s"><a class="wp-block-button__link wp-element-button" href="/calculator/"><?php echo wp_kses_post( yui_credit_union_t( 'kcc84fa82' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"ycu-btn"} -->
<div class="wp-block-button ycu-btn"><a class="wp-block-button__link wp-element-button" href="/membership/"><?php echo wp_kses_post( yui_credit_union_t( 'k9a5c4aa0' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
