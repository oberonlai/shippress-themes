<?php
/**
 * Title: Home: the services as horizontal strips
 * Slug: seimitsu-works/home-works
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: The services intro beside a photo, then the four plans as horizontal strips: number, photo, title, facts and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-feature"><!-- wp:group {"align": "wide", "className": "sw-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-spread"><!-- wp:group {"className": "sw-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-spread__intro"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sw-sec__title sw-feature__title"} -->
<h2 class="wp-block-heading sw-sec__title sw-feature__title"><?php echo esc_html( seimitsu_works_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-dropcap"} -->
<p class="sw-dropcap"><?php echo esc_html( seimitsu_works_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-pull"} -->
<p class="sw-pull"><?php echo esc_html( seimitsu_works_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-piece sw-spread__img"} -->
<figure class="wp-block-image size-full sw-piece sw-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sw-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-rooms"><!-- wp:group {"className": "sw-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-room__img"} -->
<figure class="wp-block-image size-full sw-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spindle.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-room__title"} -->
<h3 class="wp-block-heading sw-room__title"><?php echo esc_html( seimitsu_works_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-room__facts"} -->
<p class="sw-room__facts"><?php echo esc_html( seimitsu_works_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-room__text"} -->
<p class="sw-room__text"><?php echo esc_html( seimitsu_works_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-room__img"} -->
<figure class="wp-block-image size-full sw-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tray.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-room__title"} -->
<h3 class="wp-block-heading sw-room__title"><?php echo esc_html( seimitsu_works_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-room__facts"} -->
<p class="sw-room__facts"><?php echo esc_html( seimitsu_works_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-room__text"} -->
<p class="sw-room__text"><?php echo esc_html( seimitsu_works_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-room__img"} -->
<figure class="wp-block-image size-full sw-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hall.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-room__title"} -->
<h3 class="wp-block-heading sw-room__title"><?php echo esc_html( seimitsu_works_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-room__facts"} -->
<p class="sw-room__facts"><?php echo esc_html( seimitsu_works_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-room__text"} -->
<p class="sw-room__text"><?php echo esc_html( seimitsu_works_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-room__img"} -->
<figure class="wp-block-image size-full sw-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/inspect.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-room__title"} -->
<h3 class="wp-block-heading sw-room__title"><?php echo esc_html( seimitsu_works_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-room__facts"} -->
<p class="sw-room__facts"><?php echo esc_html( seimitsu_works_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sw-room__text"} -->
<p class="sw-room__text"><?php echo esc_html( seimitsu_works_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "sw-more"} -->
<div class="wp-block-buttons sw-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/capabilities/"><?php echo esc_html( seimitsu_works_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
