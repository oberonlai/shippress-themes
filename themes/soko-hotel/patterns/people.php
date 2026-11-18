<?php
/**
 * Title: People: the story and a film credit roll
 * Slug: soko-hotel/people
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: Paper ground; a mason photograph on the left, the rebuilding story and a seven-line credit roll on the right.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-sec sk-people","anchor":"people","layout":{"type":"default"}} -->
<section id="people" class="wp-block-group sk-sec sk-people"><!-- wp:group {"className":"sk-people__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sk-people__grid"><!-- wp:group {"className":"sk-people__photo","layout":{"type":"default"}} -->
<div class="wp-block-group sk-people__photo"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-frame"} -->
<figure class="wp-block-image size-full sk-frame"><img src="<?php echo soko_hotel_img( 'mason.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p08' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sk-cap sk-cap--dark sk-cap--left"} -->
<p class="sk-cap sk-cap--dark sk-cap--left"><?php echo esc_html( soko_hotel_t( 'people_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-people__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-people__text"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'people_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'people_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sk-credits sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credits sp-stagger"><!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_founder' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_ines' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_gm' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_tomas' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_concierge' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_mirela' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_mason' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_henrik' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_canteen' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_noor' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_housekeeping' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_lucia' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-credit sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-credit sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-credit__role"} -->
<p class="sk-credit__role"><?php echo esc_html( soko_hotel_t( 'role_night' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-credit__name"} -->
<p class="sk-credit__name"><?php echo esc_html( soko_hotel_t( 'name_pavel' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sk-more"} -->
<p class="sk-more"><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'people_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
