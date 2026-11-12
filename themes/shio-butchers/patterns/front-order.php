<?php
/**
 * Title: Home: order band
 * Slug: shio-butchers/front-order
 * Categories: shio-butchers
 * Keywords: butcher, shop, home
 * Viewport Width: 1440
 * Description: Full-bleed paper band with the four-step order line and the order actions.
 */
?>
<!-- wp:group {"tagName":"section","className":"sb-order-band","layout":{"type":"constrained"},"align":"full","anchor":"order"} -->
<section id="order" class="wp-block-group alignfull sb-order-band"><!-- wp:group {"className":"sb-two sb-two--order","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide sb-two sb-two--order"><!-- wp:group {"className":"sb-order__text","layout":{"type":"default"}} -->
<div class="wp-block-group sb-order__text"><!-- wp:paragraph {"className":"sb-sub"} -->
<p class="sb-sub"><?php echo wp_kses_post( shio_butchers_t( 'k6575d9a5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( shio_butchers_t( 'kc251bb11' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'k2937be56' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ol class="sb-orderline"><li><span>01</span> <?php echo wp_kses_post( shio_butchers_t( 'k47451166' ) ); ?></li><li><span>02</span> <?php echo wp_kses_post( shio_butchers_t( 'kc10caf32' ) ); ?></li><li><span>03</span> <?php echo wp_kses_post( shio_butchers_t( 'k8f993527' ) ); ?></li><li><span>04</span> <?php echo wp_kses_post( shio_butchers_t( 'k8f71a4b5' ) ); ?></li></ol>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-order__actions","layout":{"type":"default"}} -->
<div class="wp-block-group sb-order__actions"><!-- wp:buttons {"className":"sb-btns"} -->
<div class="wp-block-buttons sb-btns"><!-- wp:button {"className":"sb-order-solid"} -->
<div class="wp-block-button sb-order-solid"><a class="wp-block-button__link wp-element-button" href="/order-for-pickup/"><?php echo wp_kses_post( shio_butchers_t( 'k299efc09' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"className":"sb-btns"} -->
<div class="wp-block-buttons sb-btns"><!-- wp:button {"className":"is-style-double sb-center"} -->
<div class="wp-block-button is-style-double sb-center"><a class="wp-block-button__link wp-element-button" href="tel:+000000002009"><?php echo wp_kses_post( shio_butchers_t( 'kaff4ec56' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
