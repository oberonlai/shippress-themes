<?php
/**
 * Title: Home: night room under a chevron
 * Slug: kagi-security/front-cover
 * Categories: kagi-security
 * Keywords: hero, first screen, chevron, night
 * Viewport Width: 1440
 * Description: First screen: the analysts' room at night, full bleed, under a translucent indigo chevron, with white label chips, the headline at the lower left and two chip buttons.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-cover","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-cover"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-cover__photo"} -->
<figure class="wp-block-image size-full ks-cover__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-night-room.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_cover_img' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="ks-cover__chevron" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ks-cover__chips","layout":{"type":"default"}} -->
<div class="wp-block-group ks-cover__chips"><!-- wp:paragraph {"className":"ks-chip"} -->
<p class="ks-chip"><?php echo wp_kses_post( kagi_security_t( 'front_cover_chip_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--off"} -->
<p class="ks-chip ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_cover_chip_2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-cover__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-cover__text"><!-- wp:paragraph {"className":"ks-cover__kicker"} -->
<p class="ks-cover__kicker"><?php echo wp_kses_post( kagi_security_t( 'front_cover_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-cover__title"} -->
<h1 class="wp-block-heading ks-cover__title"><?php echo wp_kses_post( kagi_security_t( 'front_cover_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-cover__lead"} -->
<p class="ks-cover__lead"><?php echo wp_kses_post( kagi_security_t( 'front_cover_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ks-cover__btns"} -->
<div class="wp-block-buttons ks-cover__btns"><!-- wp:button {"className":"is-style-chip"} -->
<div class="wp-block-button is-style-chip"><a class="wp-block-button__link wp-element-button" href="/plans-and-fees/"><?php echo wp_kses_post( kagi_security_t( 'front_cover_btn1' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-chip-light"} -->
<div class="wp-block-button is-style-chip-light"><a class="wp-block-button__link wp-element-button" href="/how-we-respond/"><?php echo wp_kses_post( kagi_security_t( 'front_cover_btn2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ks-cover__foot"} -->
<p class="ks-cover__foot"><?php echo wp_kses_post( kagi_security_t( 'front_cover_scroll' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
