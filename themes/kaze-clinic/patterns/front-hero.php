<?php
/**
 * Title: Home: washed full-bleed hero
 * Slug: kaze-clinic/front-hero
 * Categories: kaze-clinic
 * Keywords: hero, photo, inset
 * Viewport Width: 1440
 * Description: A 100svh washed high-key photograph with three cross-fading slides that settles from bright to normal and insets into a 40px frame on scroll; label, headline, one sentence and an arrow-disc link at the left; a white info bar at the foot.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"top","className":"kz-hero sp-parallax","layout":{"type":"default"}} -->
<section id="top" class="wp-block-group alignfull kz-hero sp-parallax"><!-- wp:group {"className":"kz-hero__frame","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__frame"><!-- wp:group {"className":"sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-slide kz-slide--3"} -->
<figure class="wp-block-image size-full kz-slide kz-slide--3"><img src="<?php echo kaze_clinic_img( 'hero-curve' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_hero-curve' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-slide kz-slide--2"} -->
<figure class="wp-block-image size-full kz-slide kz-slide--2"><img src="<?php echo kaze_clinic_img( 'hero-talk' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_hero-talk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-slide kz-slide--1"} -->
<figure class="wp-block-image size-full kz-slide kz-slide--1"><img src="<?php echo kaze_clinic_img( 'hero-spirometry' ); ?>" alt="<?php echo esc_attr( kaze_clinic_t( 'alt_hero-spirometry' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kz-hero__copy"><!-- wp:paragraph {"className":"kz-label"} -->
<p class="kz-label"><?php echo esc_html( kaze_clinic_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kz-hero__h1"} -->
<h1 class="wp-block-heading kz-hero__h1"><?php echo esc_html( kaze_clinic_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-hero__lead"} -->
<p class="kz-hero__lead"><?php echo esc_html( kaze_clinic_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link kz-link--hero"} -->
<p class="kz-link kz-link--hero"><a href="/book/"><?php echo esc_html( kaze_clinic_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-infobar","layout":{"type":"default"}} -->
<div class="wp-block-group kz-infobar"><!-- wp:paragraph {"className":"kz-infobar__i"} -->
<p class="kz-infobar__i"><?php echo esc_html( kaze_clinic_t( 'bar_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-infobar__i"} -->
<p class="kz-infobar__i"><?php echo esc_html( kaze_clinic_t( 'bar_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-infobar__i"} -->
<p class="kz-infobar__i"><?php echo esc_html( kaze_clinic_t( 'bar_phone' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-link kz-infobar__i kz-infobar__cta"} -->
<p class="kz-link kz-infobar__i kz-infobar__cta"><a href="/book/"><?php echo esc_html( kaze_clinic_t( 'hero_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
