<?php
/**
 * Title: Home: hero
 * Slug: naru-clinic/front-hero
 * Categories: naru-clinic
 * Keywords: clinic, occupational health
 * Viewport Width: 1440
 * Description: Full-bleed photograph with a three-layer wave band, contact capsule and the headline on the ground below.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nc-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull nc-hero"><!-- wp:group {"className": "nc-hero__top", "layout": {"type": "default"}} -->
<div class="wp-block-group nc-hero__top"><!-- wp:group {"className": "nc-hero__media sp-parallax", "layout": {"type": "default"}} -->
<div class="wp-block-group nc-hero__media sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nc-hero__photo"} -->
<figure class="wp-block-image size-full nc-hero__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-exam.webp' ) ); ?>" alt="<?php echo esc_attr( naru_clinic_t( 'a8c025ece' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:html -->
<svg class="nc-waves" viewBox="0 0 1440 146" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M0,52 C320,20 640,46 900,30 C1140,14 1320,0 1440,6 V146 H0 Z" fill="#D4E7ED"/><path d="M0,40 C300,22 620,30 880,62 C1080,88 1280,104 1440,98 V146 H0 Z" fill="#64A0D3"/><path d="M0,84 C360,60 700,78 960,116 C1160,142 1330,138 1440,110 V146 H0 Z" fill="#F8F7F3"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- wp:group {"className": "nc-hero__text nc-wrap", "layout": {"type": "default"}} -->
<div class="wp-block-group nc-hero__text nc-wrap"><!-- wp:heading {"level": 1, "className": "nc-h1"} -->
<h1 class="wp-block-heading nc-h1"><?php echo wp_kses_post( naru_clinic_t( 'k3b3eae74' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:group {"className": "nc-hero__side", "layout": {"type": "default"}} -->
<div class="wp-block-group nc-hero__side"><!-- wp:paragraph {"className":"nc-lead"} -->
<p class="nc-lead"><?php echo wp_kses_post( naru_clinic_t( 'k44e09931' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<p class="nc-cta"><a class="nc-pill" href="/contact/"><?php echo wp_kses_post( naru_clinic_t( 'k705550f8' ) ); ?></a><a class="nc-wl" href="/for-employers/"><?php echo wp_kses_post( naru_clinic_t( 'kd98a1266' ) ); ?></a></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="nc-capsule"><p class="nc-capsule__i"><span class="nc-ic"><svg viewBox="0 0 16 16" width="14" height="14" aria-hidden="true"><circle cx="8" cy="8" r="6" fill="none" stroke="#3D5062" stroke-width="1.3"/><path d="M8 4.5V8l2.4 1.6" fill="none" stroke="#3D5062" stroke-width="1.3"/></svg></span><?php echo wp_kses_post( naru_clinic_t( 'k21ad76b9' ) ); ?></p><p class="nc-capsule__i"><span class="nc-ic"><svg viewBox="0 0 16 16" width="14" height="14" aria-hidden="true"><path d="M8 14s4.5-4.2 4.5-7.4a4.5 4.5 0 0 0-9 0C3.5 9.800 8 14 8 14z" fill="none" stroke="#3D5062" stroke-width="1.3"/><circle cx="8" cy="6.600" r="1.600" fill="#3D5062"/></svg></span><?php echo wp_kses_post( naru_clinic_t( 'kac8158a3' ) ); ?></p><p class="nc-capsule__i"><span class="nc-ic"><svg viewBox="0 0 16 16" width="14" height="14" aria-hidden="true"><path d="M3.500 2.500l2 .5.8 2.600-1.300 1a8 8 0 0 0 3.400 3.400l1-1.300 2.600.8.5 2c-.5 1.500-1.800 2-3.500 1.500C6 12 3 9 2 6c-.5-1.700 0-3 1.500-3.500z" fill="none" stroke="#3D5062" stroke-width="1.200" stroke-linejoin="round"/></svg></span><a href="tel:+002044107720">+00 20 4410 7720</a></p></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
