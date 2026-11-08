<?php
/**
 * Title: Home: the circuit
 * Slug: hibari-flight/front-circuit
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Description: A drawn airfield circuit with a travelling lark behind a centred statement, then three full-bleed photo strips.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-circuit","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hf-sec hf-circuit"><!-- wp:html -->
<div class="hf-circuit__loop" aria-hidden="true"><svg viewBox="0 0 1100 420" width="1100" height="420" fill="none"><defs><linearGradient id="hfarc" x1="0" x2="1"><stop offset="0" stop-color="#C9D6DC"/><stop offset="1" stop-color="#8FA7B3"/></linearGradient></defs><path d="M180 0 H920 A180 180 0 0 1 1100 180 V240 A180 180 0 0 1 920 420 H180 A180 180 0 0 1 0 240 V180 A180 180 0 0 1 180 0 Z" stroke="#8FA7B3" stroke-width="2" stroke-dasharray="2 8" stroke-linecap="round"/><path d="M250 0 H850" stroke="url(#hfarc)" stroke-width="10" stroke-linecap="round"/></svg><img class="hf-circuit__lark" src="<?php echo esc_url( get_theme_file_uri( 'assets/stickers/lark-flying.svg' ) ); ?>" alt=""/></div>
<!-- /wp:html --><!-- wp:group {"className":"hf-circuit__copy","layout":{"type":"constrained"}} -->
<div class="wp-block-group hf-circuit__copy"><!-- wp:paragraph {"className":"hf-label sp-reveal sp-reveal--up"} -->
<p class="hf-label sp-reveal sp-reveal--up"><?php echo wp_kses_post( hibari_flight_t( 'k6876432d' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"hf-statement sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading hf-statement sp-reveal sp-reveal--up"><?php echo wp_kses_post( hibari_flight_t( 'k8e467ccb' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hf-circuit__body sp-reveal sp-reveal--up"} -->
<p class="hf-circuit__body sp-reveal sp-reveal--up"><?php echo wp_kses_post( hibari_flight_t( 'k26931ac5' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-pill sp-reveal sp-reveal--up"} -->
<p class="hf-pill sp-reveal sp-reveal--up"><a href="/lesson-block/"><?php echo wp_kses_post( hibari_flight_t( 'k9d78a85c' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"align":"full","className":"hf-strips3 sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hf-strips3 sp-stagger"><!-- wp:group {"className":"hf-strip3__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-strip3__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-strip3__img"} -->
<figure class="wp-block-image size-full hf-strip3__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h06.webp' ) ); ?>" alt="<?php echo esc_attr( hibari_flight_t( 'ac1d2fb84' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"hf-strip3__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-strip3__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-strip3__img"} -->
<figure class="wp-block-image size-full hf-strip3__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h07.webp' ) ); ?>" alt="<?php echo esc_attr( hibari_flight_t( 'ab70cf412' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className":"hf-strip3__item sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-strip3__item sp-reveal sp-reveal--up"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hf-strip3__img"} -->
<figure class="wp-block-image size-full hf-strip3__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h08.webp' ) ); ?>" alt="<?php echo esc_attr( hibari_flight_t( 'aef27cb20' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
