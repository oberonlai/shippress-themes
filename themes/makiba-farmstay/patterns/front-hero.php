<?php
/**
 * Title: Home: full-bleed dawn hero with photo slides
 * Slug: makiba-farmstay/front-hero
 * Categories: makiba-farmstay
 * Viewport Width: 1440
 * Description: Three high-key photographs cross-fading under an 18 percent shade, the centred catch line, sub-line and gold pill, a left dot pager and two swallows; the ridge strip sits over its foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mf-hero sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-hero sp-parallax"><!-- wp:group {"className":"mf-slides sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group mf-slides sp-parallax__layer"><!-- wp:group {"className":"mf-slide mf-slide--1"} -->
<div class="wp-block-group mf-slide mf-slide--1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-dawn-milking.webp' ) ); ?>" alt="<?php echo esc_attr( makiba_farmstay_t( 'a6b308f4d' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<figure class="mf-slide mf-slide--2" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-mist-pasture.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:html -->

<!-- wp:html -->
<figure class="mf-slide mf-slide--3" aria-hidden="true"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-evening-yard.webp' ) ); ?>" alt="" loading="lazy"/></figure>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mf-hero__shade","layout":{"type":"default"}} -->
<div class="wp-block-group mf-hero__shade"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mf-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group mf-hero__copy"><!-- wp:heading {"level":1,"className":"mf-hero__title"} -->
<h1 class="wp-block-heading mf-hero__title"><?php echo wp_kses_post( makiba_farmstay_t( 'k696e036a' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"mf-hero__sub"} -->
<p class="mf-hero__sub"><?php echo wp_kses_post( makiba_farmstay_t( 'k72b39643' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className":"mf-hero__cta"} -->
<div class="wp-block-buttons mf-hero__cta"><!-- wp:button {"className":"mf-pill"} -->
<div class="wp-block-button mf-pill"><a class="wp-block-button__link wp-element-button" href="/book/"><?php echo wp_kses_post( makiba_farmstay_t( 'kdf4f333c' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<p class="mf-dots" aria-label="<?php echo esc_attr( makiba_farmstay_t( 'ac2c52634' ) ); ?>"><span class="mf-dot mf-dot--1"><span class="screen-reader-text"><?php echo wp_kses_post( makiba_farmstay_t( 'k79313848' ) ); ?></span></span><span class="mf-dot mf-dot--2"><span class="screen-reader-text"><?php echo wp_kses_post( makiba_farmstay_t( 'kb311a3fe' ) ); ?></span></span><span class="mf-dot mf-dot--3"><span class="screen-reader-text"><?php echo wp_kses_post( makiba_farmstay_t( 'k0b8bd8e7' ) ); ?></span></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<div class="mf-birds" aria-hidden="true"><svg class="mf-bird mf-bird--a" width="52" height="33" viewBox="0 0 22 14" fill="#fff" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 3.5C5 .5 9 2.5 11 7 13 2.5 17 .5 22 3.5 17.5 4 14.5 6.5 12.6 10.5L14 14 11 12.2 8 14 9.4 10.5C7.5 6.5 4.5 4 0 3.5Z"/></svg><svg class="mf-bird mf-bird--b" width="34" height="22" viewBox="0 0 22 14" fill="#fff" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><path d="M0 3.5C5 .5 9 2.5 11 7 13 2.5 17 .5 22 3.5 17.5 4 14.5 6.5 12.6 10.5L14 14 11 12.2 8 14 9.4 10.5C7.5 6.5 4.5 4 0 3.5Z"/></svg></div>
<!-- /wp:html -->

<!-- wp:html -->
<div class="mf-hero__ridge" role="group" aria-label="<?php echo esc_attr( makiba_farmstay_t( 'a8550d6d6' ) ); ?>"><svg class="mf-hero__ridgesvg" viewBox="0 0 1440 150" preserveAspectRatio="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="mf-gp-hero" width="160" height="160" patternUnits="userSpaceOnUse"><image href="<?php echo esc_url( get_theme_file_uri( 'assets/images/grain.png' ) ); ?>" width="160" height="160"/></pattern></defs><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="#A1A46D"/><path d="M0 150V104C110 84 270 66 403 72C560 80 690 112 850 92C985 74 1052 14 1123 2C1220 -4 1340 20 1440 36V150Z" fill="url(#mf-gp-hero)"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="#6B6F3A"/><path d="M0 150V124C200 104 380 114 520 124C700 136 900 100 1080 80C1200 68 1330 76 1440 94V150Z" fill="url(#mf-gp-hero)"/></svg><div class="mf-hero__times"><a href="/#day-0530"><b>05:30</b></a><a href="/#day-0700"><b>07:00</b></a><a href="/#day-1000"><b>10:00</b></a><a href="/#day-1300"><b>13:00</b></a><a href="/#day-1830"><b>18:30</b></a></div></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
