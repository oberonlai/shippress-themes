<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: enban-records/header-main
 * Categories: enban-records
 * Inserter: no
 * Viewport Width: 1440
 * Description: Transparent overlay header: wordmark with a disc, the one top menu and a small outline booking button.
 */
?>
<!-- wp:group {"tagName":"div","className":"eb-header","layout":{"type":"default"}} -->
<div class="wp-block-group eb-header"><!-- wp:group {"align":"full","className":"eb-header__row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull eb-header__row"><!-- wp:group {"className":"eb-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group eb-brand"><!-- wp:html -->
<?php echo enban_records_icon( 'disc', 28 ); ?>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"eb-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-header__tools","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group eb-header__tools"><!-- wp:navigation {"overlayMenu":"mobile","className":"eb-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<?php if ( class_exists( 'WooCommerce' ) && WP_Block_Type_Registry::get_instance()->is_registered( 'woocommerce/mini-cart' ) ) : ?>

<!-- wp:woocommerce/mini-cart /-->
<?php endif; ?>

<!-- wp:buttons {"className":"eb-header__book"} -->
<div class="wp-block-buttons eb-header__book"><!-- wp:button {"className":"is-style-eb-small"} -->
<div class="wp-block-button is-style-eb-small"><a class="wp-block-button__link wp-element-button" href="/listening/"><?php echo esc_html( enban_records_t( 'k63e94218' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
