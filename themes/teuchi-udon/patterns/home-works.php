<?php
/**
 * Title: Home: the rooms as a card mosaic
 * Slug: teuchi-udon/home-works
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: The menu as a card mosaic: the intro card, a large kake card, the zaru and kitsune cards, a wide curry card and the broth photo, set in rectangular grid areas.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-feature"><!-- wp:group {"align": "wide", "className": "tu-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-spread"><!-- wp:group {"className": "tu-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-spread__intro"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tu-sec__title tu-feature__title"} -->
<h2 class="wp-block-heading tu-sec__title tu-feature__title"><?php echo esc_html( teuchi_udon_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-dropcap"} -->
<p class="tu-dropcap"><?php echo esc_html( teuchi_udon_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-pull"} -->
<p class="tu-pull"><?php echo esc_html( teuchi_udon_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-piece tu-spread__img"} -->
<figure class="wp-block-image size-full tu-piece tu-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/broth.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tu-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-rooms"><!-- wp:group {"className": "tu-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-room__img"} -->
<figure class="wp-block-image size-full tu-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-kake.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-room__title"} -->
<h3 class="wp-block-heading tu-room__title"><?php echo esc_html( teuchi_udon_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-room__facts"} -->
<p class="tu-room__facts"><?php echo esc_html( teuchi_udon_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-room__text"} -->
<p class="tu-room__text"><?php echo esc_html( teuchi_udon_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-room__img"} -->
<figure class="wp-block-image size-full tu-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-zaru.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-room__title"} -->
<h3 class="wp-block-heading tu-room__title"><?php echo esc_html( teuchi_udon_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-room__facts"} -->
<p class="tu-room__facts"><?php echo esc_html( teuchi_udon_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-room__text"} -->
<p class="tu-room__text"><?php echo esc_html( teuchi_udon_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-room__img"} -->
<figure class="wp-block-image size-full tu-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-kitsune.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-room__title"} -->
<h3 class="wp-block-heading tu-room__title"><?php echo esc_html( teuchi_udon_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-room__facts"} -->
<p class="tu-room__facts"><?php echo esc_html( teuchi_udon_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-room__text"} -->
<p class="tu-room__text"><?php echo esc_html( teuchi_udon_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-room__img"} -->
<figure class="wp-block-image size-full tu-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-curry.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-room__title"} -->
<h3 class="wp-block-heading tu-room__title"><?php echo esc_html( teuchi_udon_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-room__facts"} -->
<p class="tu-room__facts"><?php echo esc_html( teuchi_udon_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tu-room__text"} -->
<p class="tu-room__text"><?php echo esc_html( teuchi_udon_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "tu-more"} -->
<div class="wp-block-buttons tu-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/menu/"><?php echo esc_html( teuchi_udon_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
