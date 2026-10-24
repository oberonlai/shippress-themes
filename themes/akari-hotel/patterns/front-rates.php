<?php
/**
 * Title: Home: rates
 * Slug: akari-hotel/front-rates
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: The six-line price list in euro.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--rates","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="rates" class="wp-block-group alignfull ak-ch ak-ch--rates"><!-- wp:group {"className":"ak-rates","layout":{"type":"default"},"align":"wide"} -->
<div class="wp-block-group alignwide ak-rates"><!-- wp:group {"className":"ak-line sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group ak-line sp-reveal sp-reveal--wipe"><!-- wp:html -->
<span class="ak-line__bar"></span>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ak-label"} -->
<p class="ak-label"><?php echo esc_html( akari_hotel_t( 'label_06' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ak-h2"} -->
<h2 class="wp-block-heading ak-h2"><?php echo esc_html( akari_hotel_t( 'rates_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:list {"className":"ak-rates__list"} -->
<ul class="wp-block-list ak-rates__list"><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate1' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate1_price' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate2' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate2_price' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate3' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate3_price' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate4' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate4_price' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate5' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate5_price' ) ); ?></span></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><span class="ak-rates__item"><?php echo esc_html( akari_hotel_t( 'rate6' ) ); ?></span><span class="ak-rates__price"><?php echo esc_html( akari_hotel_t( 'rate6_price' ) ); ?></span></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- wp:group {"className":"ak-rates__foot","layout":{"type":"default"}} -->
<div class="wp-block-group ak-rates__foot"><!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akari_hotel_t( 'rates_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ak-link"} -->
<p class="ak-link"><a href="<?php echo esc_url( home_url( '/rates/' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'rates_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
