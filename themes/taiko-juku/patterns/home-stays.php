<?php
/**
 * Title: Home: four classes
 * Slug: taiko-juku/home-stays
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: Four photo cards in a staggered grid: first beats, little drummers, ensemble and private lessons.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-stays", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-stays"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'stays_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'stays_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "tj-stays__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tj-stays__grid"><!-- wp:group {"className": "tj-stay tj-stay--bell", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-stay tj-stay--bell"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-stay__img"} -->
<figure class="wp-block-image size-full tj-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tj-stay__title"} -->
<h3 class="wp-block-heading tj-stay__title"><?php echo esc_html( taiko_juku_t( 'bell_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-stay__text"} -->
<p class="tj-stay__text"><?php echo esc_html( taiko_juku_t( 'bell_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tj-stay__facts"} -->
<p class="tj-stay__facts"><?php echo esc_html( taiko_juku_t( 'bell_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tj-stay tj-stay--dome", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-stay tj-stay--dome"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-stay__img"} -->
<figure class="wp-block-image size-full tj-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bachi.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tj-stay__title"} -->
<h3 class="wp-block-heading tj-stay__title"><?php echo esc_html( taiko_juku_t( 'dome_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-stay__text"} -->
<p class="tj-stay__text"><?php echo esc_html( taiko_juku_t( 'dome_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tj-stay__facts"} -->
<p class="tj-stay__facts"><?php echo esc_html( taiko_juku_t( 'dome_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tj-stay tj-stay--family", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-stay tj-stay--family"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-stay__img"} -->
<figure class="wp-block-image size-full tj-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_fire' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tj-stay__title"} -->
<h3 class="wp-block-heading tj-stay__title"><?php echo esc_html( taiko_juku_t( 'family_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-stay__text"} -->
<p class="tj-stay__text"><?php echo esc_html( taiko_juku_t( 'family_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tj-stay__facts"} -->
<p class="tj-stay__facts"><?php echo esc_html( taiko_juku_t( 'family_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tj-stay tj-stay--pitch", "layout": {"type": "default"}} -->
<div class="wp-block-group tj-stay tj-stay--pitch"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tj-stay__img"} -->
<figure class="wp-block-image size-full tj-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/class.webp' ) ); ?>" alt="<?php echo esc_attr( taiko_juku_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tj-stay__title"} -->
<h3 class="wp-block-heading tj-stay__title"><?php echo esc_html( taiko_juku_t( 'pitch_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-stay__text"} -->
<p class="tj-stay__text"><?php echo esc_html( taiko_juku_t( 'pitch_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tj-stay__facts"} -->
<p class="tj-stay__facts"><?php echo esc_html( taiko_juku_t( 'pitch_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "tj-more"} -->
<div class="wp-block-buttons tj-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( taiko_juku_t( 'rates_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
