<?php
/**
 * Title: Home: two-tab index of covers and trades
 * Slug: hojo-brokers/front-index
 * Categories: hojo-brokers
 * Keywords: tabs,covers
 * Viewport Width: 1440
 * Description: A two-tab index (by cover, by trade) in a slate frame with notched cells; tabs switch with radio inputs and no script.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hb-sec hb-index","anchor":"covers","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hb-sec hb-index" id="covers"><!-- wp:group {"className":"hb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap"><!-- wp:paragraph {"className":"hb-label"} -->
<p class="hb-label"><?php echo wp_kses_post( hojo_brokers_t( 'kaffa8f07' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hb-h2"} -->
<h2 class="wp-block-heading hb-h2"><?php echo wp_kses_post( hojo_brokers_t( 'k1751e57e' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<div class="hb-tabs">
<input class="hb-tabs__in" type="radio" name="hb-tab" id="hb-tab-cover" checked>
<input class="hb-tabs__in" type="radio" name="hb-tab" id="hb-tab-trade">
<div class="hb-tablist"><label class="hb-tab hb-tab--cover" for="hb-tab-cover"><?php echo wp_kses_post( hojo_brokers_t( 'ke8488082' ) ); ?></label><label class="hb-tab hb-tab--trade" for="hb-tab-trade"><?php echo wp_kses_post( hojo_brokers_t( 'k5622706c' ) ); ?></label></div>
<div class="hb-panel hb-panel--cover">
<?php echo wp_kses_post( hojo_brokers_t( 'k49f45acd' ) ); ?>
</div>
<div class="hb-panel hb-panel--trade">
<?php echo wp_kses_post( hojo_brokers_t( 'kac43e14a' ) ); ?>
</div>
</div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"hb-link"} -->
<p class="hb-link"><a href="/covers/"><?php echo wp_kses_post( hojo_brokers_t( 'k3a911372' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
