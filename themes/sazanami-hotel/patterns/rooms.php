<?php
/**
 * Title: Rooms: large photo, text, tall photo, rate rows
 * Slug: sazanami-hotel/rooms
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: Chapter "rooms": a 3:2 photograph at the gutter, the text beside it, a tall photograph bleeding off the right edge, then four hairline rate rows.
 */
?>
<!-- wp:group {"anchor":"rooms","tagName":"section","className":"sz-ch sz-ch--mist2","layout":{"type":"default"}} -->
<section id="rooms" class="wp-block-group sz-ch sz-ch--mist2"><!-- wp:group {"className":"sz-opener sp-reveal sp-reveal--up ","layout":{"type":"default"}} -->
<div class="wp-block-group sz-opener sp-reveal sp-reveal--up "><!-- wp:html -->
<span class="sz-wave-wrap" aria-hidden="true"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?></span>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"sz-opener__w"} -->
<p class="sz-opener__w"><?php echo esc_html( sazanami_hotel_t( 'w_rooms' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-rooms","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rooms"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sz-rooms__big sp-reveal"} -->
<figure class="wp-block-image size-full sz-rooms__big sp-reveal"><img src="<?php echo sazanami_hotel_img( 'room-lakeview-bed.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sz-rooms__text sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rooms__text sp-reveal sp-reveal--up"><!-- wp:heading {"level":3,"className":"sz-h3"} -->
<h3 class="wp-block-heading sz-h3"><?php echo esc_html( sazanami_hotel_t( 'rooms_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-body"} -->
<p class="sz-body"><?php echo esc_html( sazanami_hotel_t( 'rooms_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sz-rooms__tall sp-reveal"} -->
<figure class="wp-block-image size-full sz-rooms__tall sp-reveal"><img src="<?php echo sazanami_hotel_img( 'room-bath-window.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-rates","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rates"><!-- wp:group {"className":"sz-rate","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rate"><!-- wp:heading {"level":3,"className":"sz-rate__n"} -->
<h3 class="wp-block-heading sz-rate__n"><?php echo esc_html( sazanami_hotel_t( 'rate_1_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-rate__d"} -->
<p class="sz-rate__d"><?php echo esc_html( sazanami_hotel_t( 'rate_1_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-rate__p"} -->
<p class="sz-rate__p"><?php echo esc_html( sazanami_hotel_t( 'rate_1_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-rate","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rate"><!-- wp:heading {"level":3,"className":"sz-rate__n"} -->
<h3 class="wp-block-heading sz-rate__n"><?php echo esc_html( sazanami_hotel_t( 'rate_2_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-rate__d"} -->
<p class="sz-rate__d"><?php echo esc_html( sazanami_hotel_t( 'rate_2_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-rate__p"} -->
<p class="sz-rate__p"><?php echo esc_html( sazanami_hotel_t( 'rate_2_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-rate","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rate"><!-- wp:heading {"level":3,"className":"sz-rate__n"} -->
<h3 class="wp-block-heading sz-rate__n"><?php echo esc_html( sazanami_hotel_t( 'rate_3_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-rate__d"} -->
<p class="sz-rate__d"><?php echo esc_html( sazanami_hotel_t( 'rate_3_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-rate__p"} -->
<p class="sz-rate__p"><?php echo esc_html( sazanami_hotel_t( 'rate_3_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-rate","layout":{"type":"default"}} -->
<div class="wp-block-group sz-rate"><!-- wp:heading {"level":3,"className":"sz-rate__n"} -->
<h3 class="wp-block-heading sz-rate__n"><?php echo esc_html( sazanami_hotel_t( 'rate_4_n' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-rate__d"} -->
<p class="sz-rate__d"><?php echo esc_html( sazanami_hotel_t( 'rate_4_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-rate__p"} -->
<p class="sz-rate__p"><?php echo esc_html( sazanami_hotel_t( 'rate_4_p' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-more","layout":{"type":"default"}} -->
<div class="wp-block-group sz-more"><!-- wp:html -->
<a class="sz-textlink" href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'rooms_link' ) ); ?></a>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

