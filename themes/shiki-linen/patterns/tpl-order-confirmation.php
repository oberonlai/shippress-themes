<?php
/**
 * Title: Template: order-confirmation
 * Slug: shiki-linen/tpl-order-confirmation
 * Categories: shiki-linen
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sl-main","layout":{"type":"default"}} -->
<main class="wp-block-group sl-main"><!-- wp:group {"className":"sl-page","layout":{"type":"default"}} -->
<div class="wp-block-group sl-page"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( shiki_linen_t( 'k7a7c46aa' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-status /-->

<!-- wp:woocommerce/order-confirmation-summary /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper -->
<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-billing-wrapper -->
<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->