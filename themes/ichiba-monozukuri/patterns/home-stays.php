<?php
/**
 * Title: Home: four kinds of stall
 * Slug: ichiba-monozukuri/home-stays
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: Four print cards in a staggered grid: pottery, woodwork, indigo textiles and bamboo baskets.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-stays", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-stays"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'stays_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'stays_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "im-stays__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide im-stays__grid"><!-- wp:group {"className": "im-stay im-stay--bell", "layout": {"type": "default"}} -->
<div class="wp-block-group im-stay im-stay--bell"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-stay__img"} -->
<figure class="wp-block-image size-full im-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/market.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "im-stay__title"} -->
<h3 class="wp-block-heading im-stay__title"><?php echo esc_html( ichiba_monozukuri_t( 'bell_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-stay__text"} -->
<p class="im-stay__text"><?php echo esc_html( ichiba_monozukuri_t( 'bell_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "im-stay__facts"} -->
<p class="im-stay__facts"><?php echo esc_html( ichiba_monozukuri_t( 'bell_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "im-stay im-stay--dome", "layout": {"type": "default"}} -->
<div class="wp-block-group im-stay im-stay--dome"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-stay__img"} -->
<figure class="wp-block-image size-full im-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "im-stay__title"} -->
<h3 class="wp-block-heading im-stay__title"><?php echo esc_html( ichiba_monozukuri_t( 'dome_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-stay__text"} -->
<p class="im-stay__text"><?php echo esc_html( ichiba_monozukuri_t( 'dome_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "im-stay__facts"} -->
<p class="im-stay__facts"><?php echo esc_html( ichiba_monozukuri_t( 'dome_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "im-stay im-stay--family", "layout": {"type": "default"}} -->
<div class="wp-block-group im-stay im-stay--family"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-stay__img"} -->
<figure class="wp-block-image size-full im-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/indigo.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_indigo' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "im-stay__title"} -->
<h3 class="wp-block-heading im-stay__title"><?php echo esc_html( ichiba_monozukuri_t( 'family_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-stay__text"} -->
<p class="im-stay__text"><?php echo esc_html( ichiba_monozukuri_t( 'family_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "im-stay__facts"} -->
<p class="im-stay__facts"><?php echo esc_html( ichiba_monozukuri_t( 'family_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "im-stay im-stay--pitch", "layout": {"type": "default"}} -->
<div class="wp-block-group im-stay im-stay--pitch"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "im-stay__img"} -->
<figure class="wp-block-image size-full im-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/baskets.webp' ) ); ?>" alt="<?php echo esc_attr( ichiba_monozukuri_t( 'alt_baskets' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "im-stay__title"} -->
<h3 class="wp-block-heading im-stay__title"><?php echo esc_html( ichiba_monozukuri_t( 'pitch_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-stay__text"} -->
<p class="im-stay__text"><?php echo esc_html( ichiba_monozukuri_t( 'pitch_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "im-stay__facts"} -->
<p class="im-stay__facts"><?php echo esc_html( ichiba_monozukuri_t( 'pitch_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "im-more"} -->
<div class="wp-block-buttons im-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/makers/"><?php echo esc_html( ichiba_monozukuri_t( 'rates_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
