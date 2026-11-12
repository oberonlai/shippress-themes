<?php
/**
 * Title: Journal: lead
 * Slug: teisha-parking/journal-lead
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-lead"><!-- wp:group {"className":"tp-lead__in","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__in"><!-- wp:group {"className":"tp-lead__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__text"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'jn_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-catch","layout":{"type":"default"}} -->
<div class="wp-block-group tp-catch"><!-- wp:paragraph {"className":"tp-line tp-line--1"} -->
<p class="tp-line tp-line--1"><?php echo esc_html( teisha_parking_t( 'jn_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-line tp-line--2"} -->
<p class="tp-line tp-line--2"><?php echo esc_html( teisha_parking_t( 'jn_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-line tp-line--3"} -->
<p class="tp-line tp-line--3"><?php echo esc_html( teisha_parking_t( 'jn_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-lead__foot","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__foot"><!-- wp:buttons {"className":"tp-lead__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tp-lead__cta"><!-- wp:button {"className":"tp-pill tp-pill--outline"} -->
<div class="wp-block-button tp-pill tp-pill--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
