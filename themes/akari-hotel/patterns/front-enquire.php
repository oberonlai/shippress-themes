<?php
/**
 * Title: Home: enquire
 * Slug: akari-hotel/front-enquire
 * Categories: akari-hotel
 * Keywords: hotel, stay, home
 * Viewport Width: 1440
 * Description: Ink band: giant word over a dusk street photograph and a rounded enquiry card.
 */
?>
<!-- wp:group {"className":"ak-ch ak-ch--enquire","tagName":"section","layout":{"type":"default"},"align":"full"} -->
<section id="enquire" class="wp-block-group alignfull ak-ch ak-ch--enquire"><!-- wp:group {"className":"ak-t1 ak-t1--enquire","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t1 ak-t1--enquire"><!-- wp:group {"className":"ak-t1__head sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ak-t1__head sp-stagger"><!-- wp:heading {"level":2,"className":"ak-word sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading ak-word sp-reveal sp-reveal--up"><?php echo esc_html( akari_hotel_t( 'enq_word' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ak-t1__photo"} -->
<figure class="wp-block-image size-full ak-t1__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-street.webp' ) ); ?>" alt="<?php echo esc_attr( akari_hotel_t( 'alt_p11' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"className":"ak-card","layout":{"type":"default"}} -->
<div class="wp-block-group ak-card"><!-- wp:heading {"level":3,"className":"ak-h3"} -->
<h3 class="wp-block-heading ak-h3"><?php echo esc_html( akari_hotel_t( 'enq_card_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ak-small"} -->
<p class="ak-small"><?php echo esc_html( akari_hotel_t( 'enq_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"ordered":true,"className":"ak-steps"} -->
<ol class="wp-block-list ak-steps"><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'step1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'step2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'step3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( akari_hotel_t( 'step4' ) ); ?></li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:buttons {"className":"ak-btns"} -->
<div class="wp-block-buttons ak-btns"><!-- wp:button {"className":"ak-pill ak-pill--ink"} -->
<div class="wp-block-button ak-pill ak-pill--ink"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#enquire' ) ); ?>"><?php echo esc_html( akari_hotel_t( 'enq_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
