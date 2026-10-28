<?php
/**
 * Title: Home: staircase hero
 * Slug: kama-cookware/home-hero
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Five product slabs in a rising diagonal on a pale stage, wordmark and headline at left, vertical rail and info bar.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-hero"><!-- wp:group {"className":"km-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group km-hero__stage"><!-- wp:group {"className":"km-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-hero__text"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'hero_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"km-hero__title"} -->
<h1 class="wp-block-heading km-hero__title"><?php echo kama_cookware_words( 'hero_h1', 'km-w' ); // phpcs:ignore ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-hero__lede"} -->
<p class="km-hero__lede"><?php echo esc_html( kama_cookware_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pills"} -->
<div class="wp-block-buttons km-pills"><!-- wp:button {"className":"km-pill km-pill--solid"} -->
<div class="wp-block-button km-pill km-pill--solid"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'hero_cta1' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'hero_cta2' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="km-stairs" aria-hidden="false"><img class="km-slab km-slab--1" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P01.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p01' ) ); ?>" width="1400" height="667" loading="eager" fetchpriority="high"/><img class="km-slab km-slab--2" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P02.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p02' ) ); ?>" width="1400" height="667" loading="eager" fetchpriority="high"/><img class="km-slab km-slab--3" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P03.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p03' ) ); ?>" width="1400" height="667" loading="eager" fetchpriority="auto"/><img class="km-slab km-slab--4" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P04.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p04' ) ); ?>" width="1400" height="667" loading="eager" fetchpriority="auto"/><img class="km-slab km-slab--5" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P05.webp' ) ); ?>" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p05' ) ); ?>" width="1400" height="667" loading="eager" fetchpriority="auto"/></div>
<div class="km-rail" aria-hidden="true"><div class="km-rail__track"><span><?php echo esc_html( kama_cookware_t( 'rail' ) ); ?></span><span><?php echo esc_html( kama_cookware_t( 'rail' ) ); ?></span></div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-info","layout":{"type":"default"}} -->
<div class="wp-block-group km-info"><!-- wp:paragraph {"className":"km-info__i"} -->
<p class="km-info__i"><?php echo esc_html( kama_cookware_t( 'info_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-info__i"} -->
<p class="km-info__i"><?php echo esc_html( kama_cookware_t( 'info_2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-info__i"} -->
<p class="km-info__i"><?php echo esc_html( kama_cookware_t( 'info_3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-info__btn"} -->
<div class="wp-block-buttons km-info__btn"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/shop/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'info_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
