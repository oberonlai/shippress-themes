<?php
/**
 * Title: Template: order-confirmation
 * Slug: aya-paper/tpl-order-confirmation
 * Categories: aya-paper
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ap-main","layout":{"type":"default"}} -->
<main class="wp-block-group ap-main">
<!-- wp:group {"tagName":"section","align":"full","className":"ap-sec ap-store-page","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-sec ap-store-page">
<!-- wp:group {"className":"ap-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ap-pagehead">
<!-- wp:woocommerce/order-confirmation-status {"className":"ap-confirmation-status"} /-->
</div>
<!-- /wp:group -->

<!-- wp:woocommerce/order-confirmation-summary /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'kf5d74ea7' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'kc20c35ef' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"className":"wc-block-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns wc-block-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'k99e15396' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'k556b98a0' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( aya_paper_t( 'k0f68b904' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /-->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->