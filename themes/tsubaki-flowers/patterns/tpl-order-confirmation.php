<?php
/**
 * Title: Template: order-confirmation
 * Slug: tsubaki-flowers/tpl-order-confirmation
 * Categories: tsubaki-flowers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tf-main tf-store","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group tf-main tf-store" style="margin-top:0"><!-- wp:group {"tagName":"section","align":"full","className":"tf-store","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-store"><!-- wp:group {"align":"wide","className":"","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide "><!-- wp:paragraph {"className":"tf-tags"} -->
<p class="tf-tags"><?php echo wp_kses_post( tsubaki_flowers_t( 'k855d1c6a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:woocommerce/order-confirmation-status {"className":""} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/order-confirmation-summary {"align":"wide"} /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tsubaki_flowers_t( 'kf5d74ea7' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tsubaki_flowers_t( 'kc20c35ef' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"align":"wide","className":"wc-block-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns alignwide wc-block-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tsubaki_flowers_t( 'k99e15396' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tsubaki_flowers_t( 'k556b98a0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( tsubaki_flowers_t( 'k0f68b904' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /--></section>
<!-- /wp:group --></main>
<!-- /wp:group -->