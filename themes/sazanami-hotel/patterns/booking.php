<?php
/**
 * Title: Booking: four steps as hairline rows
 * Slug: sazanami-hotel/booking
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Chapter "booking" continues the dark ground: four numbered text rows in two columns, the stay limits, the cancellation sentence and the booking pill.
 */
?>
<!-- wp:group {"anchor":"booking","tagName":"section","className":"sz-ch sz-ch--dark sz-ch--cont","layout":{"type":"default"}} -->
<section id="booking" class="wp-block-group sz-ch sz-ch--dark sz-ch--cont"><!-- wp:group {"className":"sz-opener sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sz-opener sp-reveal sp-reveal--up "><!-- wp:html -->
<span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-opener__w"} -->
<p class="sz-opener__w"><?php echo esc_html( sazanami_hotel_t( 'w_booking' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sz-steps sp-stagger"><!-- wp:group {"className":"sz-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-step__n"} -->
<p class="sz-step__n">1</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step__b"><!-- wp:heading {"level":3,"className":"sz-step__t"} -->
<h3 class="wp-block-heading sz-step__t"><?php echo esc_html( sazanami_hotel_t( 'b1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-step__l"} -->
<p class="sz-step__l"><?php echo esc_html( sazanami_hotel_t( 'b1_l' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-step__n"} -->
<p class="sz-step__n">2</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step__b"><!-- wp:heading {"level":3,"className":"sz-step__t"} -->
<h3 class="wp-block-heading sz-step__t"><?php echo esc_html( sazanami_hotel_t( 'b2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-step__l"} -->
<p class="sz-step__l"><?php echo esc_html( sazanami_hotel_t( 'b2_l' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-step__n"} -->
<p class="sz-step__n">3</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step__b"><!-- wp:heading {"level":3,"className":"sz-step__t"} -->
<h3 class="wp-block-heading sz-step__t"><?php echo esc_html( sazanami_hotel_t( 'b3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-step__l"} -->
<p class="sz-step__l"><?php echo esc_html( sazanami_hotel_t( 'b3_l' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-step__n"} -->
<p class="sz-step__n">4</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-step__b","layout":{"type":"default"}} -->
<div class="wp-block-group sz-step__b"><!-- wp:heading {"level":3,"className":"sz-step__t"} -->
<h3 class="wp-block-heading sz-step__t"><?php echo esc_html( sazanami_hotel_t( 'b4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-step__l"} -->
<p class="sz-step__l"><?php echo esc_html( sazanami_hotel_t( 'b4_l' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-bookfoot sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-bookfoot sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sz-body sz-body--c"} -->
<p class="sz-body sz-body--c"><?php echo esc_html( sazanami_hotel_t( 'book_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-note sz-note--dark sz-note--c"} -->
<p class="sz-note sz-note--dark sz-note--c"><?php echo esc_html( sazanami_hotel_t( 'book_policy' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"sz-btns sz-pill sz-pill--light sz-pill--c"} -->
<div class="wp-block-buttons sz-btns sz-pill sz-pill--light sz-pill--c"><!-- wp:button {"className":"is-style-outline sz-pill sz-pill--light sz-pill--c"} -->
<div class="wp-block-button is-style-outline sz-pill sz-pill--light sz-pill--c"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'book_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

