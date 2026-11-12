<?php
/**
 * Title: Home: hairline ticker and numeral ledger
 * Slug: teisha-parking/front-ledger
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-band","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-band"><!-- wp:group {"className":"tp-ticker sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker sp-marquee"><!-- wp:group {"className":"tp-ticker__row","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker__row"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'ticker' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-ticker__row","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ticker__row"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'ticker' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-ledger","layout":{"type":"default"}} -->
<div class="wp-block-group tp-ledger"><!-- wp:group {"className":"tp-led tp-led--1 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tp-led tp-led--1 sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tp-num sp-count"} -->
<p class="tp-num sp-count">6</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-led__cap"} -->
<p class="tp-led__cap"><span class="tp-led__k"><?php echo esc_html( teisha_parking_t( 'led1_k' ) ); ?></span> <?php echo esc_html( teisha_parking_t( 'led1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-led tp-led--2 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tp-led tp-led--2 sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tp-num sp-count"} -->
<p class="tp-num sp-count">412</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-led__cap"} -->
<p class="tp-led__cap"><span class="tp-led__k"><?php echo esc_html( teisha_parking_t( 'led2_k' ) ); ?></span> <?php echo esc_html( teisha_parking_t( 'led2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-led tp-led--3 sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group tp-led tp-led--3 sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"tp-num"} -->
<p class="tp-num">2009</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-led__cap"} -->
<p class="tp-led__cap"><span class="tp-led__k"><?php echo esc_html( teisha_parking_t( 'led3_k' ) ); ?></span> <?php echo esc_html( teisha_parking_t( 'led3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
