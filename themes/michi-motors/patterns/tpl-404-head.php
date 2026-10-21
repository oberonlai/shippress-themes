<?php
/**
 * Title: Tpl 404 head
 * Slug: michi-motors/tpl-404-head
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Inserter: no
 * Description: Plain graphite head with a staggered light heading.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mm-band mm-pagehead mm-pagehead--plain","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mm-band mm-pagehead mm-pagehead--plain"><!-- wp:group {"className":"mm-band__grid","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__grid"><!-- wp:heading {"level":1,"className":"mm-t1 mm-t1--page"} -->
<h1 class="wp-block-heading mm-t1 mm-t1--page"><span class="mm-t1__l mm-t1__l--1"><?php echo esc_html( michi_motors_t( 'tpl_404_head_1' ) ); ?></span><span class="mm-t1__l mm-t1__l--2"><?php echo esc_html( michi_motors_t( 'tpl_404_head_2' ) ); ?></span></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mm-band__foot","layout":{"type":"default"}} -->
<div class="wp-block-group mm-band__foot"><!-- wp:paragraph {"className":"mm-label mm-label--light"} -->
<p class="mm-label mm-label--light"><?php echo esc_html( michi_motors_t( 'tpl_404_head_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-rule-lead"} -->
<p class="mm-rule-lead"><?php echo esc_html( michi_motors_t( 'tpl_404_head_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
