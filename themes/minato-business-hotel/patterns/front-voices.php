<?php
/**
 * Title: Home: guests in their own words
 * Slug: minato-business-hotel/front-voices
 * Categories: minato-business-hotel
 * Keywords: guests, quotes, reviews
 * Viewport Width: 1440
 * Description: Three short quotations from regular guests set in three ruled columns under one heading.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-voices","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-voices"><!-- wp:group {"align":"wide","className":"mb-voices__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-voices__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"mb-voices__row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-voices__row"><!-- wp:quote {"className":"mb-voice"} -->
<blockquote class="wp-block-quote mb-voice"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_01_q' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_01_c' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"mb-voice"} -->
<blockquote class="wp-block-quote mb-voice"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_02_q' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_02_c' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"mb-voice"} -->
<blockquote class="wp-block-quote mb-voice"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_03_q' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( minato_business_hotel_t( 'front_voices_03_c' ) ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
