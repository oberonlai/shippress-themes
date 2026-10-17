<?php
/**
 * Title: Home: the classes as a magazine spread
 * Slug: shinai-dojo/home-works
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: Feature 01: the classes as a magazine spread: title, a two-column lead with a drop cap and a pull quote beside a plate, then the four classes on a staggered grid.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-feature"><!-- wp:group {"align": "wide", "className": "sd-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-spread"><!-- wp:group {"className": "sd-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-spread__intro"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sd-sec__title sd-feature__title"} -->
<h2 class="wp-block-heading sd-sec__title sd-feature__title"><?php echo esc_html( shinai_dojo_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-dropcap"} -->
<p class="sd-dropcap"><?php echo esc_html( shinai_dojo_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-pull"} -->
<p class="sd-pull"><?php echo esc_html( shinai_dojo_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-piece sd-spread__img"} -->
<figure class="wp-block-image size-full sd-piece sd-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rack.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sd-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-rooms"><!-- wp:group {"className": "sd-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-room__img"} -->
<figure class="wp-block-image size-full sd-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kids-play.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_play' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-room__title"} -->
<h3 class="wp-block-heading sd-room__title"><?php echo esc_html( shinai_dojo_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-room__facts"} -->
<p class="sd-room__facts"><?php echo esc_html( shinai_dojo_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-room__text"} -->
<p class="sd-room__text"><?php echo esc_html( shinai_dojo_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-room__img"} -->
<figure class="wp-block-image size-full sd-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gear.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-room__title"} -->
<h3 class="wp-block-heading sd-room__title"><?php echo esc_html( shinai_dojo_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-room__facts"} -->
<p class="sd-room__facts"><?php echo esc_html( shinai_dojo_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-room__text"} -->
<p class="sd-room__text"><?php echo esc_html( shinai_dojo_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-room__img"} -->
<figure class="wp-block-image size-full sd-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/strike.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_strike' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-room__title"} -->
<h3 class="wp-block-heading sd-room__title"><?php echo esc_html( shinai_dojo_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-room__facts"} -->
<p class="sd-room__facts"><?php echo esc_html( shinai_dojo_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-room__text"} -->
<p class="sd-room__text"><?php echo esc_html( shinai_dojo_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-room__img"} -->
<figure class="wp-block-image size-full sd-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-step.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_tea' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-room__title"} -->
<h3 class="wp-block-heading sd-room__title"><?php echo esc_html( shinai_dojo_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-room__facts"} -->
<p class="sd-room__facts"><?php echo esc_html( shinai_dojo_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sd-room__text"} -->
<p class="sd-room__text"><?php echo esc_html( shinai_dojo_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "sd-more"} -->
<div class="wp-block-buttons sd-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( shinai_dojo_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
