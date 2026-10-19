<?php
/**
 * Title: Home: custom order flow
 * Slug: tsutsumi-packaging/custom-order
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Description: Four steps in one line on an ink field with amber step numbers: spec, sample, proof, run, each with its lead time.
 */
?>
<!-- wp:group {"tagName":"section","className":"tp-co","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-co">
<!-- wp:group {"className":"tp-sec__head","layout":{"type":"default"}} -->
<div class="wp-block-group tp-sec__head"><!-- wp:paragraph {"className":"tp-label"} -->
<p class="tp-label"><?php echo esc_html( tsutsumi_packaging_t( 'co_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-sec__title"} -->
<h2 class="wp-block-heading tp-sec__title"><?php echo esc_html( tsutsumi_packaging_t( 'co_title' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:html -->
<ol class="tp-co__list"><li class="tp-co__s"><span class="tp-co__no">01</span><span class="tp-co__d"><?php echo esc_html( tsutsumi_packaging_t( 'co1_d' ) ); ?></span><h3 class="tp-co__t"><?php echo esc_html( tsutsumi_packaging_t( 'co1_t' ) ); ?></h3><p class="tp-co__p"><?php echo esc_html( tsutsumi_packaging_t( 'co1_p' ) ); ?></p></li><li class="tp-co__s"><span class="tp-co__no">02</span><span class="tp-co__d"><?php echo esc_html( tsutsumi_packaging_t( 'co2_d' ) ); ?></span><h3 class="tp-co__t"><?php echo esc_html( tsutsumi_packaging_t( 'co2_t' ) ); ?></h3><p class="tp-co__p"><?php echo esc_html( tsutsumi_packaging_t( 'co2_p' ) ); ?></p></li><li class="tp-co__s"><span class="tp-co__no">03</span><span class="tp-co__d"><?php echo esc_html( tsutsumi_packaging_t( 'co3_d' ) ); ?></span><h3 class="tp-co__t"><?php echo esc_html( tsutsumi_packaging_t( 'co3_t' ) ); ?></h3><p class="tp-co__p"><?php echo esc_html( tsutsumi_packaging_t( 'co3_p' ) ); ?></p></li><li class="tp-co__s"><span class="tp-co__no">04</span><span class="tp-co__d"><?php echo esc_html( tsutsumi_packaging_t( 'co4_d' ) ); ?></span><h3 class="tp-co__t"><?php echo esc_html( tsutsumi_packaging_t( 'co4_t' ) ); ?></h3><p class="tp-co__p"><?php echo esc_html( tsutsumi_packaging_t( 'co4_p' ) ); ?></p></li></ol>
<!-- /wp:html --></section>
<!-- /wp:group -->
