<?php
/**
 * Title: Template: order-confirmation
 * Slug: hazuki-instruments/tpl-order-confirmation
 * Categories: hazuki-instruments
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group hz-main" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"hz-section hz-store-page","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-store-page"><!-- wp:group {"align":"wide","className":"hz-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hz-head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hazuki_instruments_t( 'k758e0c20' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/order-confirmation-status {"className":"hz-confirmation-status"} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/order-confirmation-summary {"align":"wide"} /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( hazuki_instruments_t( 'kf5d74ea7' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( hazuki_instruments_t( 'kc20c35ef' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"align":"wide","className":"wc-block-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns alignwide wc-block-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( hazuki_instruments_t( 'k99e15396' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( hazuki_instruments_t( 'k556b98a0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( hazuki_instruments_t( 'k0f68b904' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /--></section>
<!-- /wp:group --></main>
<!-- /wp:group -->