<?php
/**
 * Title: Header cart square
 * Slug: mochi-pet-supply/head-cart
 * Inserter: no
 */
$mo_n = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0;
?>
<!-- wp:html -->
<a class="mo-cart" href="/cart/" aria-label="Basket"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="#222222" stroke-width="2" stroke-linejoin="round" aria-hidden="true"><path d="M3.5 6.5h13l-1 10.5h-11z"/><path d="M7 6.5V5a3 3 0 0 1 6 0v1.5"/></svg><span class="mo-cart__n"><?php echo (int) $mo_n; ?></span></a>
<!-- /wp:html -->
