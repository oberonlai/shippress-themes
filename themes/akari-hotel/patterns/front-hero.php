<?php
/**
 * Title: Home: hero
 * Slug: akari-hotel/front-hero
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink screen with the two-line serif wordmark, a small centred arrival photo, the four-time info bar and the Enquire pill.
 */
?>
<!-- wp:group {"className":"ak-hero","tagName":"section","layout":{"type":"default"},"align":"full","anchor":"top"} -->
<section id="top" class="wp-block-group alignfull ak-hero"><!-- wp:heading {"level":1,"className":"ak-hero__title"} -->
<h1 class="wp-block-heading ak-hero__title"><span class="ak-hero__l1"><?php echo esc_html( akari_hotel_t( 'wordmark' ) ); ?></span><br><span class="ak-hero__l2"><?php echo esc_html( akari_hotel_t( 'wm_line2' ) ); ?></span></h1>
<!-- /wp:heading -->
<!-- wp:group {"className":"ak-hero__row","layout":{"type":"default"}} -->
<div class="wp-block-group ak-hero__row"><!-- wp:html -->
<nav class="ak-info" aria-label="<?php echo esc_attr( akari_hotel_t( 'hero_label' ) ); ?>"><a class="ak-info__col" href="#arrival"><span class="ak-info__t"><?php echo esc_html( akari_hotel_t( 'time1' ) ); ?></span><span class="ak-info__w"><?php echo esc_html( akari_hotel_t( 'time1_w' ) ); ?></span></a><a class="ak-info__col" href="#evening"><span class="ak-info__t"><?php echo esc_html( akari_hotel_t( 'time2' ) ); ?></span><span class="ak-info__w"><?php echo esc_html( akari_hotel_t( 'time2_w' ) ); ?></span></a><a class="ak-info__col" href="#night"><span class="ak-info__t"><?php echo esc_html( akari_hotel_t( 'time3' ) ); ?></span><span class="ak-info__w"><?php echo esc_html( akari_hotel_t( 'time3_w' ) ); ?></span></a><a class="ak-info__col" href="#breakfast"><span class="ak-info__t"><?php echo esc_html( akari_hotel_t( 'time4' ) ); ?></span><span class="ak-info__w"><?php echo esc_html( akari_hotel_t( 'time4_w' ) ); ?></span></a></nav>
<!-- /wp:html -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-hero__photo"} -->
<figure class="wp-block-image size-full ak-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-arrival.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p02' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"ak-hero__cta","layout":{"type":"default"}} -->
<div class="wp-block-group ak-hero__cta"><!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-pill"} -->
<div class="wp-block-button ak-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#enquire' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'enquire' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
<span class="ak-hero__bar"></span>
<!-- /wp:html -->
<!-- wp:group {"className":"ak-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group ak-hero__text"><!-- wp:paragraph {"className":"ak-label ak-hero__label"} -->
<p class="ak-label ak-hero__label"><?php echo esc_html( akari_hotel_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-hero__p"} -->
<p class="ak-hero__p"><?php echo esc_html( akari_hotel_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
