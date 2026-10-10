<?php
/**
 * Title: Shop: every piece with prices (orders by phone or email)
 * Slug: wagu-mono/shop-catalogue
 * Categories: wagu-mono, featured
 * Keywords: shop, products, catalogue, order, prices
 * Viewport Width: 1440
 * Description: The shop page without an online store: a page head with how to order, every piece as a numbered card with its wood and price, and the showroom card. With WooCommerce active the shop page shows the store instead.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"wm-page-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-page-head"><!-- wp:group {"align":"wide","className":"wm-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-split"><!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Chairs, tables, benches, shelves &amp; small things</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The <em>pieces</em></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wm-stack","layout":{"type":"default"}} -->
<div class="wp-block-group wm-stack"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead">Every piece is made to order in eight to ten weeks, or taken from the showroom floor when one is ready. Call or write with the piece, the wood and the size, and we draw it for you before we cut anything.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">How to order</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-arrow"} -->
<div class="wp-block-button is-style-arrow"><a class="wp-block-button__link wp-element-button" href="/care/">Care &amp; repairs</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wm-section wm-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-section wm-section--flush-top"><!-- wp:group {"align":"wide","className":"wm-pieces","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wm-pieces"><?php
$wagu_mono_n = 0;
foreach ( array_keys( wagu_mono_pieces() ) as $wagu_mono_key ) {
	echo ( $wagu_mono_n ? "\n\n" : '' ) . wagu_mono_piece_card( $wagu_mono_key, ++$wagu_mono_n ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"wm-section wm-section--flush-top","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull wm-section wm-section--flush-top"><!-- wp:group {"align":"wide","className":"is-style-sheet wm-order","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-sheet wm-order"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size">Order by phone, email or in the showroom</h2>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"wagu-mono/showroom-info"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
