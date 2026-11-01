<?php
/**
 * Title: Home: twin photo hero
 * Slug: suji-clinic/front-hero
 * Categories: suji-clinic
 * Keywords: clinic, hero, sports medicine
 * Viewport Width: 1440
 * Description: Two full-height photographs meeting at the centre, a hairline headline lower left, a framed notice card across the seam, then the divided nav strip.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sj-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sj-hero"><!-- wp:group {"className":"sj-hero__panel sj-hero__panel--l","layout":{"type":"default"}} -->
<div class="wp-block-group sj-hero__panel sj-hero__panel--l"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-hero__img sj-hero__img--a"} -->
<figure class="wp-block-image size-full sj-hero__img sj-hero__img--a"><img src="<?php echo suji_clinic_img( 'h1-taping.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_h1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-hero__img sj-hero__img--b"} -->
<figure class="wp-block-image size-full sj-hero__img sj-hero__img--b"><img src="<?php echo suji_clinic_img( 'h3-gait.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_h3' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-hero__panel sj-hero__panel--r","layout":{"type":"default"}} -->
<div class="wp-block-group sj-hero__panel sj-hero__panel--r"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-hero__img sj-hero__img--a"} -->
<figure class="wp-block-image size-full sj-hero__img sj-hero__img--a"><img src="<?php echo suji_clinic_img( 'h2-shoes.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_h2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sj-hero__img sj-hero__img--b"} -->
<figure class="wp-block-image size-full sj-hero__img sj-hero__img--b"><img src="<?php echo suji_clinic_img( 'h4-startline.webp' ); ?>" alt="<?php echo esc_attr( suji_clinic_t( 'alt_h4' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sj-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group sj-hero__text"><!-- wp:paragraph {"className":"sj-hero__latin"} -->
<p class="sj-hero__latin"><?php echo esc_html( suji_clinic_t( 'hero_latin' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sj-hero__h"} -->
<h1 class="wp-block-heading sj-hero__h"><span><?php echo esc_html( suji_clinic_t( 'hero_h1_a' ) ); ?></span> <span><?php echo esc_html( suji_clinic_t( 'hero_h1_b' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"sj-hero__rule is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity sj-hero__rule is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"className":"sj-hero__lead"} -->
<p class="sj-hero__lead"><?php echo str_replace( '<br>', ' <br>', suji_clinic_lines( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sj-notice"} -->
<p class="sj-notice"><a href="<?php echo suji_clinic_url( 'visit' ); ?>"><span class="sj-notice__icon" aria-hidden="true"></span><span class="sj-notice__txt"><span class="sj-notice__a"><?php echo esc_html( suji_clinic_t( 'notice_1' ) ); ?></span><span class="sj-notice__b"><?php echo esc_html( suji_clinic_t( 'notice_2' ) ); ?></span></span></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"nav-strip","className":"sj-strip-part"} /-->
