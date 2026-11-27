<?php
/**
 * Title: Hero: film strip, text beside, logo row
 * Slug: sazanami-hotel/hero
 * Categories: sazanami-hotel
 * Viewport Width: 1440
 * Description: First screen: text column at the left, a horizontal strip of three film frames (the middle one drifts) bleeding off the right edge, and a logo row with neighbours, the wordmark between hairlines and a frosted notice pill.
 */
?>
<!-- wp:group {"tagName":"section","className":"sz-hero","layout":{"type":"default"}} -->
<section class="wp-block-group sz-hero"><!-- wp:group {"className":"sz-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__grid"><!-- wp:group {"className":"sz-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sz-hero__text"><!-- wp:paragraph {"className":"sz-kicker"} -->
<p class="sz-kicker"><?php echo esc_html( sazanami_hotel_t( 'hero_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sz-h1"} -->
<h1 class="wp-block-heading sz-h1"><?php echo esc_html( sazanami_hotel_t( 'hero_h1_a' ) ); ?><br><?php echo esc_html( sazanami_hotel_t( 'hero_h1_b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sz-verse sz-verse--hero"} -->
<p class="sz-verse sz-verse--hero"><?php echo sazanami_hotel_lines( 'hero_verse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sz-note"} -->
<p class="sz-note"><?php echo esc_html( sazanami_hotel_t( 'hero_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sz-actions","layout":{"type":"default"}} -->
<div class="wp-block-group sz-actions"><!-- wp:buttons {"className":"sz-btns sz-pill"} -->
<div class="wp-block-buttons sz-btns sz-pill"><!-- wp:button {"className":"is-style-outline sz-pill"} -->
<div class="wp-block-button is-style-outline sz-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/booking/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'hero_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:html -->
<a class="sz-textlink" href="<?php echo esc_url( home_url( '/rooms/' ) ); ?>"><?php echo esc_html( sazanami_hotel_t( 'hero_link' ) ); ?></a>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-strip","layout":{"type":"default"}} -->
<div class="wp-block-group sz-strip"><!-- wp:group {"className":"sz-frame sz-frame--l","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame sz-frame--l"><!-- wp:group {"className":"sz-frame__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo sazanami_hotel_img( 'hero-jetty-dawn.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-cap"} -->
<p class="sz-cap"><?php echo esc_html( sazanami_hotel_t( 'cap_jetty' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-frame sz-frame--m","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame sz-frame--m"><!-- wp:group {"className":"sz-frame__ph sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame__ph sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo sazanami_hotel_img( 'hero-window-seat.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-cap"} -->
<p class="sz-cap"><?php echo esc_html( sazanami_hotel_t( 'cap_window' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-frame sz-frame--r","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame sz-frame--r"><!-- wp:group {"className":"sz-frame__ph","layout":{"type":"default"}} -->
<div class="wp-block-group sz-frame__ph"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo sazanami_hotel_img( 'hero-sill-glass.webp' ); ?>" alt="<?php echo sazanami_hotel_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sz-cap"} -->
<p class="sz-cap"><?php echo esc_html( sazanami_hotel_t( 'cap_sill' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-logorow","layout":{"type":"default"}} -->
<div class="wp-block-group sz-logorow"><!-- wp:group {"className":"sz-logorow__nb","layout":{"type":"default"}} -->
<div class="wp-block-group sz-logorow__nb"><!-- wp:paragraph {"className":"sz-label"} -->
<p class="sz-label"><?php echo esc_html( sazanami_hotel_t( 'logo_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="sz-nb"><li><?php echo esc_html( sazanami_hotel_t( 'nb_1' ) ); ?></li><li><?php echo esc_html( sazanami_hotel_t( 'nb_2' ) ); ?></li><li><?php echo esc_html( sazanami_hotel_t( 'nb_3' ) ); ?></li><li><?php echo esc_html( sazanami_hotel_t( 'nb_4' ) ); ?></li></ul>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-logorow__em","layout":{"type":"default"}} -->
<div class="wp-block-group sz-logorow__em"><!-- wp:html -->
<p class="sz-emblem" aria-hidden="false"><span class="sz-emblem__l"></span><span class="sz-emblem__c"><?php echo sazanami_hotel_icon( 'wave', 'sz-wave' ); ?><span class="sz-emblem__w"><?php echo esc_html( sazanami_hotel_t( 'emblem' ) ); ?></span></span><span class="sz-emblem__l"></span></p>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"sz-logorow__pill","layout":{"type":"default"}} -->
<div class="wp-block-group sz-logorow__pill"><!-- wp:html -->
<p class="sz-notice"><span class="sz-chip sz-chip--solid"><?php echo esc_html( sazanami_hotel_t( 'pill_chip' ) ); ?></span><span><?php echo esc_html( sazanami_hotel_t( 'pill_text' ) ); ?></span></p>
<!-- /wp:html -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->

