<?php
/**
 * Title: Home: arrival details (a strip of times and distances)
 * Slug: minato-business-hotel/front-arrival
 * Categories: minato-business-hotel
 * Keywords: arrival, check-in, times
 * Viewport Width: 1440
 * Description: Check-in and checkout times, breakfast hours and the walk from the station in one ruled strip under the opening photograph. Information only, not a form.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-arrival","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-arrival"><!-- wp:group {"align":"wide","className":"mb-arrival__row","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-arrival__row"><!-- wp:list {"className":"mb-arrival__list"} -->
<ul class="wp-block-list mb-arrival__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_arrival_01' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_arrival_02' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_arrival_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_arrival_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( minato_business_hotel_t( 'front_arrival_05' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
