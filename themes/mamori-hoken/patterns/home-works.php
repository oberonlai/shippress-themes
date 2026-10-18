<?php
/**
 * Title: Home: the rooms as a card mosaic
 * Slug: mamori-hoken/home-works
 * Categories: mamori-hoken
 * Keywords: insurance, agency, advice
 * Viewport Width: 1440
 * Description: The cover as a card mosaic: the intro card, a large home card, the car and health cards, a wide business card and the desk photo, set in rectangular grid areas.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-feature"><!-- wp:group {"align": "wide", "className": "mh-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-spread"><!-- wp:group {"className": "mh-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-spread__intro"><!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow"><?php echo esc_html( mamori_hoken_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mh-sec__title mh-feature__title"} -->
<h2 class="wp-block-heading mh-sec__title mh-feature__title"><?php echo esc_html( mamori_hoken_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-dropcap"} -->
<p class="mh-dropcap"><?php echo esc_html( mamori_hoken_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-pull"} -->
<p class="mh-pull"><?php echo esc_html( mamori_hoken_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-piece mh-spread__img"} -->
<figure class="wp-block-image size-full mh-piece mh-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "mh-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mh-rooms"><!-- wp:group {"className": "mh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-room__img"} -->
<figure class="wp-block-image size-full mh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-home.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mh-room__title"} -->
<h3 class="wp-block-heading mh-room__title"><?php echo esc_html( mamori_hoken_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-room__facts"} -->
<p class="mh-room__facts"><?php echo esc_html( mamori_hoken_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-room__text"} -->
<p class="mh-room__text"><?php echo esc_html( mamori_hoken_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-room__img"} -->
<figure class="wp-block-image size-full mh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-car.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mh-room__title"} -->
<h3 class="wp-block-heading mh-room__title"><?php echo esc_html( mamori_hoken_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-room__facts"} -->
<p class="mh-room__facts"><?php echo esc_html( mamori_hoken_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-room__text"} -->
<p class="mh-room__text"><?php echo esc_html( mamori_hoken_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-room__img"} -->
<figure class="wp-block-image size-full mh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-health.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mh-room__title"} -->
<h3 class="wp-block-heading mh-room__title"><?php echo esc_html( mamori_hoken_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-room__facts"} -->
<p class="mh-room__facts"><?php echo esc_html( mamori_hoken_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-room__text"} -->
<p class="mh-room__text"><?php echo esc_html( mamori_hoken_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mh-room__img"} -->
<figure class="wp-block-image size-full mh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cover-business.webp' ) ); ?>" alt="<?php echo esc_attr( mamori_hoken_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mh-room__title"} -->
<h3 class="wp-block-heading mh-room__title"><?php echo esc_html( mamori_hoken_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-room__facts"} -->
<p class="mh-room__facts"><?php echo esc_html( mamori_hoken_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mh-room__text"} -->
<p class="mh-room__text"><?php echo esc_html( mamori_hoken_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "mh-more"} -->
<div class="wp-block-buttons mh-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/cover/"><?php echo esc_html( mamori_hoken_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
