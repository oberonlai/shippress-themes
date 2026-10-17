<?php
/**
 * Title: Home: the rooms as a card mosaic
 * Slug: kotonoha-honyaku/home-works
 * Categories: kotonoha-honyaku
 * Keywords: translation, interpreting, languages
 * Viewport Width: 1440
 * Description: The menu as a card mosaic: the intro card, a large kake card, the zaru and kitsune cards, a wide curry card and the broth photo, set in rectangular grid areas.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-feature"><!-- wp:group {"align": "wide", "className": "kh-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-spread"><!-- wp:group {"className": "kh-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-spread__intro"><!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow"><?php echo esc_html( kotonoha_honyaku_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kh-sec__title kh-feature__title"} -->
<h2 class="wp-block-heading kh-sec__title kh-feature__title"><?php echo esc_html( kotonoha_honyaku_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-dropcap"} -->
<p class="kh-dropcap"><?php echo esc_html( kotonoha_honyaku_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-pull"} -->
<p class="kh-pull"><?php echo esc_html( kotonoha_honyaku_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-piece kh-spread__img"} -->
<figure class="wp-block-image size-full kh-piece kh-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shelf.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kh-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kh-rooms"><!-- wp:group {"className": "kh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-room__img"} -->
<figure class="wp-block-image size-full kh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-legal.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_legal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kh-room__title"} -->
<h3 class="wp-block-heading kh-room__title"><?php echo esc_html( kotonoha_honyaku_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-room__facts"} -->
<p class="kh-room__facts"><?php echo esc_html( kotonoha_honyaku_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-room__text"} -->
<p class="kh-room__text"><?php echo esc_html( kotonoha_honyaku_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-room__img"} -->
<figure class="wp-block-image size-full kh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-literary.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kh-room__title"} -->
<h3 class="wp-block-heading kh-room__title"><?php echo esc_html( kotonoha_honyaku_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-room__facts"} -->
<p class="kh-room__facts"><?php echo esc_html( kotonoha_honyaku_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-room__text"} -->
<p class="kh-room__text"><?php echo esc_html( kotonoha_honyaku_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-room__img"} -->
<figure class="wp-block-image size-full kh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-interpret.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kh-room__title"} -->
<h3 class="wp-block-heading kh-room__title"><?php echo esc_html( kotonoha_honyaku_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-room__facts"} -->
<p class="kh-room__facts"><?php echo esc_html( kotonoha_honyaku_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-room__text"} -->
<p class="kh-room__text"><?php echo esc_html( kotonoha_honyaku_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kh-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kh-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kh-room__img"} -->
<figure class="wp-block-image size-full kh-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-web.webp' ) ); ?>" alt="<?php echo esc_attr( kotonoha_honyaku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kh-room__title"} -->
<h3 class="wp-block-heading kh-room__title"><?php echo esc_html( kotonoha_honyaku_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-room__facts"} -->
<p class="kh-room__facts"><?php echo esc_html( kotonoha_honyaku_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kh-room__text"} -->
<p class="kh-room__text"><?php echo esc_html( kotonoha_honyaku_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "kh-more"} -->
<div class="wp-block-buttons kh-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kotonoha_honyaku_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
