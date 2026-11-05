<?php
/**
 * Title: Home: ask for a bay
 * Slug: teisha-parking/front-apply
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"apply","className":"tp-apply","layout":{"type":"default"}} -->
<section id="apply" class="wp-block-group alignfull tp-apply"><!-- wp:group {"className":"tp-ticker tp-ticker--light sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker tp-ticker--light sp-marquee"><!-- wp:group {"className":"tp-ticker__row","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker__row"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'ticker' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-ticker__row","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker__row" aria-hidden="true"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'ticker' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-apply__in","layout":{"type":"default"}} -->
<div class="wp-block-group tp-apply__in"><!-- wp:group {"className":"tp-apply__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-apply__text"><!-- wp:heading {"className":"tp-h2"} -->
<h2 class="wp-block-heading tp-h2"><?php echo esc_html( teisha_parking_t( 'apply_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'apply_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-apply__reply"} -->
<p class="tp-apply__reply"><?php echo esc_html( teisha_parking_t( 'apply_reply' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-apply__act","layout":{"type":"default"}} -->
<div class="wp-block-group tp-apply__act"><!-- wp:buttons {"layout":{"type":"flex"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"tp-pill tp-pill--light"} -->
<div class="wp-block-button tp-pill tp-pill--light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"tp-apply__wait"} -->
<p class="tp-apply__wait"><a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'apply_wait' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
