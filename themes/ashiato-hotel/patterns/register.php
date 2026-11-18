<?php
/**
 * Title: Register: three guest stories
 * Slug: ashiato-hotel/register
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: Three short quotes from the guest register, each with the dog and the room.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-sec ah-register","layout":{"type":"default"}} -->
<section class="wp-block-group ah-sec ah-register"><!-- wp:group {"className":"ah-register__head sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-register__head sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ah-h2"} -->
<h2 class="wp-block-heading ah-h2"><?php echo esc_html( ashiato_hotel_t( 'register_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ah-stories sp-stagger"><!-- wp:group {"className":"ah-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ah-story__q"} -->
<p class="ah-story__q"><?php echo esc_html( ashiato_hotel_t( 'story1_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-story__n"} -->
<p class="ah-story__n"><?php echo esc_html( ashiato_hotel_t( 'story1_n' ) ); ?><br><span><?php echo esc_html( ashiato_hotel_t( 'story1_r' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ah-story__q"} -->
<p class="ah-story__q"><?php echo esc_html( ashiato_hotel_t( 'story2_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-story__n"} -->
<p class="ah-story__n"><?php echo esc_html( ashiato_hotel_t( 'story2_n' ) ); ?><br><span><?php echo esc_html( ashiato_hotel_t( 'story2_r' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ah-story sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"ah-story__q"} -->
<p class="ah-story__q"><?php echo esc_html( ashiato_hotel_t( 'story3_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-story__n"} -->
<p class="ah-story__n"><?php echo esc_html( ashiato_hotel_t( 'story3_n' ) ); ?><br><span><?php echo esc_html( ashiato_hotel_t( 'story3_r' ) ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-trail ah-trail--dr sp-stagger" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
