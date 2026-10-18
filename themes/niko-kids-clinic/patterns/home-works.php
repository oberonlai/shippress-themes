<?php
/**
 * Title: Home: the services as horizontal strips
 * Slug: niko-kids-clinic/home-works
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: The services intro beside a photo, then the four plans as horizontal strips: number, photo, title, facts and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-feature"><!-- wp:group {"align": "wide", "className": "nk-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-spread"><!-- wp:group {"className": "nk-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-spread__intro"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "nk-sec__title nk-feature__title"} -->
<h2 class="wp-block-heading nk-sec__title nk-feature__title"><?php echo esc_html( niko_kids_clinic_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-dropcap"} -->
<p class="nk-dropcap"><?php echo esc_html( niko_kids_clinic_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-pull"} -->
<p class="nk-pull"><?php echo esc_html( niko_kids_clinic_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-spread__img"} -->
<figure class="wp-block-image size-full nk-piece nk-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "nk-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-rooms"><!-- wp:group {"className": "nk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-room__img"} -->
<figure class="wp-block-image size-full nk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/corridor.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-room__title"} -->
<h3 class="wp-block-heading nk-room__title"><?php echo esc_html( niko_kids_clinic_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-room__facts"} -->
<p class="nk-room__facts"><?php echo esc_html( niko_kids_clinic_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-room__text"} -->
<p class="nk-room__text"><?php echo esc_html( niko_kids_clinic_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-room__img"} -->
<figure class="wp-block-image size-full nk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blocks.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-room__title"} -->
<h3 class="wp-block-heading nk-room__title"><?php echo esc_html( niko_kids_clinic_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-room__facts"} -->
<p class="nk-room__facts"><?php echo esc_html( niko_kids_clinic_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-room__text"} -->
<p class="nk-room__text"><?php echo esc_html( niko_kids_clinic_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-room__img"} -->
<figure class="wp-block-image size-full nk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_life' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-room__title"} -->
<h3 class="wp-block-heading nk-room__title"><?php echo esc_html( niko_kids_clinic_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-room__facts"} -->
<p class="nk-room__facts"><?php echo esc_html( niko_kids_clinic_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-room__text"} -->
<p class="nk-room__text"><?php echo esc_html( niko_kids_clinic_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-room__img"} -->
<figure class="wp-block-image size-full nk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/exam.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-room__title"} -->
<h3 class="wp-block-heading nk-room__title"><?php echo esc_html( niko_kids_clinic_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-room__facts"} -->
<p class="nk-room__facts"><?php echo esc_html( niko_kids_clinic_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "nk-room__text"} -->
<p class="nk-room__text"><?php echo esc_html( niko_kids_clinic_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "nk-more"} -->
<div class="wp-block-buttons nk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/care/"><?php echo esc_html( niko_kids_clinic_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
