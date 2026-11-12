<?php
/**
 * Title: Template: order-confirmation
 * Slug: kakeru-run/tpl-order-confirmation
 * Categories: kakeru-run
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kr-main","layout":{"type":"default"}} -->
<main class="wp-block-group kr-main"><!-- wp:group {"align":"full","className":"kr-row kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-head"><!-- wp:group {"className":"kr-rail kr-rail--l","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-s3","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-s3"><!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo wp_kses_post( kakeru_run_t( 'k7a7c46aa' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/order-confirmation-status {"className":"kr-confirm"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kr-row kr-storerow","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-storerow"><!-- wp:group {"className":"kr-rail kr-rail--l","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-s3 kr-storecontent","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-s3 kr-storecontent"><!-- wp:woocommerce/order-confirmation-summary /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kakeru_run_t( 'kf5d74ea7' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kakeru_run_t( 'kc20c35ef' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"className":"wc-block-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns wc-block-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kakeru_run_t( 'k99e15396' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kakeru_run_t( 'k556b98a0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( kakeru_run_t( 'k0f68b904' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->