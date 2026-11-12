<?php
/**
 * Title: Page: Newsletter
 * Slug: teisha-parking/page-newsletter
 * Categories: teisha-parking
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tp-lead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-lead"><!-- wp:group {"className":"tp-lead__in","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__in"><!-- wp:group {"className":"tp-lead__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__text"><!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'nl_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-catch","layout":{"type":"default"}} -->
<div class="wp-block-group tp-catch"><!-- wp:paragraph {"className":"tp-line tp-line--1"} -->
<p class="tp-line tp-line--1"><?php echo esc_html( teisha_parking_t( 'nl_l1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-line tp-line--2"} -->
<p class="tp-line tp-line--2"><?php echo esc_html( teisha_parking_t( 'nl_l2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tp-line tp-line--3"} -->
<p class="tp-line tp-line--3"><?php echo esc_html( teisha_parking_t( 'nl_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-lead__foot","layout":{"type":"default"}} -->
<div class="wp-block-group tp-lead__foot"><!-- wp:buttons {"className":"tp-lead__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tp-lead__cta"><!-- wp:button {"className":"tp-pill tp-pill--outline"} -->
<div class="wp-block-button tp-pill tp-pill--outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( teisha_parking_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tp-sec tp-about","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-sec tp-about"><!-- wp:group {"className":"tp-win tp-win--1 tp-about__win","layout":{"type":"default"}} -->
<div class="wp-block-group tp-win tp-win--1 tp-about__win"><!-- wp:group {"className":"tp-win__in sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group tp-win__in sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08.webp' ) ); ?>" alt="<?php echo esc_attr( teisha_parking_t( 'p08_alt' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tp-cap tp-cap--edge-r"} -->
<p class="tp-cap tp-cap--edge-r"><?php echo esc_html( teisha_parking_t( 'nl_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tp-about__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-about__text"><!-- wp:paragraph {"className":"tp-eyebrow"} -->
<p class="tp-eyebrow"><?php echo esc_html( teisha_parking_t( 'nl_eb' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-h2"} -->
<h2 class="wp-block-heading tp-h2"><?php echo esc_html( teisha_parking_t( 'nl_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'nl_b1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tp-sec tp-prose","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull tp-sec tp-prose"><!-- wp:paragraph {"className":"tp-eyebrow"} -->
<p class="tp-eyebrow"><?php echo esc_html( teisha_parking_t( 'nl_eb2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"tp-h2"} -->
<h2 class="wp-block-heading tp-h2"><?php echo esc_html( teisha_parking_t( 'nl_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( teisha_parking_t( 'nl_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"tp-list tp-list--sites"} -->
<ul class="tp-list tp-list--sites wp-block-list"><!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'canal_name' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'market_name' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'station_name' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'orchard_name' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'riverside_name' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html( teisha_parking_t( 'library_name' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"className":"tp-contact__cta","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tp-contact__cta"><!-- wp:button {"className":"tp-pill tp-pill--solid"} -->
<div class="wp-block-button tp-pill tp-pill--solid"><a class="wp-block-button__link wp-element-button" href="mailto:bays@teisha-parking.example?subject=Waitlist%20for%20a%20full%20car%20park"><?php echo esc_html( teisha_parking_t( 'nl_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"tp-apply__reply tp-contact__reply"} -->
<p class="tp-apply__reply tp-contact__reply"><?php echo esc_html( teisha_parking_t( 'nl_note' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
