<?php
/**
 * Title: Home: 01 Arrival
 * Slug: akari-hotel/front-arrival
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Chapter 01: wide lobby photo with a lone label, then the giant word over a key-handover portrait.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--arrival","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="arrival" class="wp-block-group alignfull ak-ch ak-ch--arrival"><!-- wp:group {"className":"ak-line sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ak-line sp-reveal sp-reveal--wipe"><!-- wp:html -->
<span class="ak-line__bar"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ak-t3","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t3"><!-- wp:paragraph {"className":"ak-label ak-t3__label"} -->
<p class="ak-label ak-t3__label"><?php echo esc_html( akari_hotel_t( 'label_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-t3__photo sp-reveal sp-reveal--mask"} -->
<figure class="wp-block-image size-full ak-t3__photo sp-reveal sp-reveal--mask"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-lobby.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p04' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ak-t1 ak-t1--arrival","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t1 ak-t1--arrival"><!-- wp:group {"className":"ak-t1__head sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t1__head sp-stagger"><!-- wp:heading {"level":2,"className":"ak-word sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ak-word sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'arr_word' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-t1__photo"} -->
<figure class="wp-block-image size-full ak-t1__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-key.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p03' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"ak-t1__text sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t1__text sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'arr_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'arr_p2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-link sp-reveal sp-reveal--up"} -->
<p class="ak-link sp-reveal sp-reveal--up"><a href="<?php echo esc_url( home_url( '/#rooms' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'arr_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
