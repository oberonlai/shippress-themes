<?php
/**
 * Title: Shop: every bouquet with prices (orders by phone or email)
 * Slug: hana-kago/shop-catalogue
 * Categories: hana-kago, featured
 * Keywords: shop, products, catalogue, order, prices, masonry
 * Viewport Width: 1440
 * Description: The shop page without an online store: a page head with how to order, every bouquet, basket, dried posy, wreath and subscription as a pressed-paper card with its price, and the shop details. With WooCommerce active the shop page shows the store instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-page-head"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Bouquets, baskets, dried flowers &amp; wreaths</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The flower <em>table</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-stack","layout":{"type":"default"}} -->
<div class="wp-block-group hk-stack"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Call or write with what you would like, who it is for and when. We make it that morning and cycle it over, or keep it cool for you to collect.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">How to order</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/delivery/">Delivery areas</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush-top"><!-- wp:group {"align":"wide","className":"hk-masonry hk-masonry--pair","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-masonry hk-masonry--pair"><?php
$hana_kago_n = 0;
foreach ( array_keys( hana_kago_specimens() ) as $hana_kago_key ) {
	echo ( $hana_kago_n ? "\n\n" : '' ) . hana_kago_specimen_card( $hana_kago_key, ++$hana_kago_n ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush-top"><!-- wp:group {"align":"wide","className":"hk-paper","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-paper"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Order by phone or email</h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"hana-kago/shop-info"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
