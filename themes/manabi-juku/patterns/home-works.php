<?php
/**
 * Title: Home: the services as horizontal strips
 * Slug: manabi-juku/home-works
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: The services intro beside a photo, then the four plans as horizontal strips: number, photo, title, facts and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-feature"><!-- wp:group {"align": "wide", "className": "mj-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-spread"><!-- wp:group {"className": "mj-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-spread__intro"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-sec__title mj-feature__title"} -->
<h2 class="wp-block-heading mj-sec__title mj-feature__title"><?php echo esc_html( manabi_juku_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-pull"} -->
<p class="mj-pull"><?php echo esc_html( manabi_juku_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-spread__img"} -->
<figure class="wp-block-image size-full mj-piece mj-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "mj-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-rooms"><!-- wp:group {"className": "mj-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-room__img"} -->
<figure class="wp-block-image size-full mj-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tutor.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-room__title"} -->
<h3 class="wp-block-heading mj-room__title"><?php echo esc_html( manabi_juku_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-room__facts"} -->
<p class="mj-room__facts"><?php echo esc_html( manabi_juku_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-room__text"} -->
<p class="mj-room__text"><?php echo esc_html( manabi_juku_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-room__img"} -->
<figure class="wp-block-image size-full mj-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/study-desk.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-room__title"} -->
<h3 class="wp-block-heading mj-room__title"><?php echo esc_html( manabi_juku_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-room__facts"} -->
<p class="mj-room__facts"><?php echo esc_html( manabi_juku_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-room__text"} -->
<p class="mj-room__text"><?php echo esc_html( manabi_juku_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-room__img"} -->
<figure class="wp-block-image size-full mj-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-room__title"} -->
<h3 class="wp-block-heading mj-room__title"><?php echo esc_html( manabi_juku_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-room__facts"} -->
<p class="mj-room__facts"><?php echo esc_html( manabi_juku_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-room__text"} -->
<p class="mj-room__text"><?php echo esc_html( manabi_juku_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-room__img"} -->
<figure class="wp-block-image size-full mj-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/library.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_review' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-room__title"} -->
<h3 class="wp-block-heading mj-room__title"><?php echo esc_html( manabi_juku_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-room__facts"} -->
<p class="mj-room__facts"><?php echo esc_html( manabi_juku_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mj-room__text"} -->
<p class="mj-room__text"><?php echo esc_html( manabi_juku_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "mj-more"} -->
<div class="wp-block-buttons mj-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/courses/"><?php echo esc_html( manabi_juku_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
