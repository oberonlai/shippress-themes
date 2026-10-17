<?php
/**
 * Title: Home: feature spread, the house
 * Slug: koshi-machiya/home-works
 * Categories: koshi-machiya
 * Keywords: machiya, townhouse, stay
 * Viewport Width: 1440
 * Description: Feature 01 as a magazine spread: the title, a two-column lead with a drop cap and a pull quote beside a taped sketch, then the four rooms on a staggered grid.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-feature"><!-- wp:group {"align": "wide", "className": "kc-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-spread"><!-- wp:group {"className": "kc-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-spread__intro"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kc-sec__title kc-feature__title"} -->
<h2 class="wp-block-heading kc-sec__title kc-feature__title"><?php echo esc_html( koshi_machiya_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-dropcap"} -->
<p class="kc-dropcap"><?php echo esc_html( koshi_machiya_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-pull"} -->
<p class="kc-pull"><?php echo esc_html( koshi_machiya_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-piece kc-spread__img"} -->
<figure class="wp-block-image size-full kc-piece kc-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lattice.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kc-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kc-rooms"><!-- wp:group {"className": "kc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-room__img"} -->
<figure class="wp-block-image size-full kc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tatami-room.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kc-room__title"} -->
<h3 class="wp-block-heading kc-room__title"><?php echo esc_html( koshi_machiya_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-room__facts"} -->
<p class="kc-room__facts"><?php echo esc_html( koshi_machiya_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-room__text"} -->
<p class="kc-room__text"><?php echo esc_html( koshi_machiya_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-room__img"} -->
<figure class="wp-block-image size-full kc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/courtyard.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kc-room__title"} -->
<h3 class="wp-block-heading kc-room__title"><?php echo esc_html( koshi_machiya_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-room__facts"} -->
<p class="kc-room__facts"><?php echo esc_html( koshi_machiya_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-room__text"} -->
<p class="kc-room__text"><?php echo esc_html( koshi_machiya_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-room__img"} -->
<figure class="wp-block-image size-full kc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bath.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kc-room__title"} -->
<h3 class="wp-block-heading kc-room__title"><?php echo esc_html( koshi_machiya_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-room__facts"} -->
<p class="kc-room__facts"><?php echo esc_html( koshi_machiya_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-room__text"} -->
<p class="kc-room__text"><?php echo esc_html( koshi_machiya_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kc-room__img"} -->
<figure class="wp-block-image size-full kc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( koshi_machiya_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kc-room__title"} -->
<h3 class="wp-block-heading kc-room__title"><?php echo esc_html( koshi_machiya_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-room__facts"} -->
<p class="kc-room__facts"><?php echo esc_html( koshi_machiya_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kc-room__text"} -->
<p class="kc-room__text"><?php echo esc_html( koshi_machiya_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "kc-more"} -->
<div class="wp-block-buttons kc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/the-house/"><?php echo esc_html( koshi_machiya_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
