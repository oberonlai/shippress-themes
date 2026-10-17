<?php
/**
 * Title: Home: the rooms as a card mosaic
 * Slug: totonou-sauna/home-works
 * Categories: totonou-sauna
 * Keywords: sauna, bathhouse, cold plunge
 * Viewport Width: 1440
 * Description: The rooms as a card mosaic: the intro card, a large stove-room card, the plunge and roof cards, a wide löyly card and the water photo, set in rectangular grid areas.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-feature"><!-- wp:group {"align": "wide", "className": "tn-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-spread"><!-- wp:group {"className": "tn-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-spread__intro"><!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow"><?php echo esc_html( totonou_sauna_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tn-sec__title tn-feature__title"} -->
<h2 class="wp-block-heading tn-sec__title tn-feature__title"><?php echo esc_html( totonou_sauna_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-dropcap"} -->
<p class="tn-dropcap"><?php echo esc_html( totonou_sauna_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-pull"} -->
<p class="tn-pull"><?php echo esc_html( totonou_sauna_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-piece tn-spread__img"} -->
<figure class="wp-block-image size-full tn-piece tn-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/water.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "tn-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tn-rooms"><!-- wp:group {"className": "tn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-room__img"} -->
<figure class="wp-block-image size-full tn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-hot.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tn-room__title"} -->
<h3 class="wp-block-heading tn-room__title"><?php echo esc_html( totonou_sauna_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-room__facts"} -->
<p class="tn-room__facts"><?php echo esc_html( totonou_sauna_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-room__text"} -->
<p class="tn-room__text"><?php echo esc_html( totonou_sauna_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-room__img"} -->
<figure class="wp-block-image size-full tn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-plunge.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tn-room__title"} -->
<h3 class="wp-block-heading tn-room__title"><?php echo esc_html( totonou_sauna_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-room__facts"} -->
<p class="tn-room__facts"><?php echo esc_html( totonou_sauna_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-room__text"} -->
<p class="tn-room__text"><?php echo esc_html( totonou_sauna_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-room__img"} -->
<figure class="wp-block-image size-full tn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-air.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tn-room__title"} -->
<h3 class="wp-block-heading tn-room__title"><?php echo esc_html( totonou_sauna_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-room__facts"} -->
<p class="tn-room__facts"><?php echo esc_html( totonou_sauna_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-room__text"} -->
<p class="tn-room__text"><?php echo esc_html( totonou_sauna_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group tn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tn-room__img"} -->
<figure class="wp-block-image size-full tn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room-loyly.webp' ) ); ?>" alt="<?php echo esc_attr( totonou_sauna_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tn-room__title"} -->
<h3 class="wp-block-heading tn-room__title"><?php echo esc_html( totonou_sauna_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-room__facts"} -->
<p class="tn-room__facts"><?php echo esc_html( totonou_sauna_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "tn-room__text"} -->
<p class="tn-room__text"><?php echo esc_html( totonou_sauna_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "tn-more"} -->
<div class="wp-block-buttons tn-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo esc_html( totonou_sauna_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
