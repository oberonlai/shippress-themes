<?php
/**
 * Title: Home: 02 Rooms
 * Slug: akari-hotel/front-rooms
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink band: sticky text at the left and three room photographs stacking flush right.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--rooms ak-stack","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="rooms" class="wp-block-group alignfull ak-ch ak-ch--rooms ak-stack"><!-- wp:group {"className":"ak-stack__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-stack__text"><!-- wp:group {"className":"ak-stack__sticky","layout":{"type":"default"}} -->
<div class="wp-block-group ak-stack__sticky"><!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'label_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ak-word"} -->
<h2 class="wp-block-heading ak-word"><?php echo esc_html( akari_hotel_t( 'rooms_word' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ak-stack__p"} -->
<p class="ak-stack__p"><?php echo esc_html( akari_hotel_t( 'rooms_p1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ak-stack__p"} -->
<p class="ak-stack__p"><?php echo esc_html( akari_hotel_t( 'rooms_p2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"ak-roomlines"} -->
<ul class="wp-block-list ak-roomlines"><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'room1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'room2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'room3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"ak-link ak-link--light"} -->
<p class="ak-link ak-link--light"><a href="<?php echo esc_url( home_url( '/#rooms' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'rooms_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"ak-stack__figs","layout":{"type":"default"}} -->
<div class="wp-block-group ak-stack__figs"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-stack__fig"} -->
<figure class="wp-block-image size-full ak-stack__fig"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p05-studio.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p05' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( akari_hotel_t( 'cap_studio' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-stack__fig sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ak-stack__fig sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p06-corner.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p06' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( akari_hotel_t( 'cap_corner' ) ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-stack__fig sp-reveal sp-reveal--zoom"} -->
<figure class="wp-block-image size-full ak-stack__fig sp-reveal sp-reveal--zoom"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p07-loft.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p07' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo esc_html( akari_hotel_t( 'cap_loft' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
