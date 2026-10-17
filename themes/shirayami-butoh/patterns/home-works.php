<?php
/**
 * Title: Home: the repertoire in one column
 * Slug: shirayami-butoh/home-works
 * Categories: shirayami-butoh
 * Keywords: butoh, dance, performance
 * Viewport Width: 1440
 * Description: The repertoire in one centred column: the title, the lead with a drop cap, a pull quote, a wide photograph, then four pieces one below the other.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-feature"><!-- wp:group {"align": "wide", "className": "sb-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-spread"><!-- wp:group {"className": "sb-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-spread__intro"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sb-sec__title sb-feature__title"} -->
<h2 class="wp-block-heading sb-sec__title sb-feature__title"><?php echo esc_html( shirayami_butoh_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-dropcap"} -->
<p class="sb-dropcap"><?php echo esc_html( shirayami_butoh_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-pull"} -->
<p class="sb-pull"><?php echo esc_html( shirayami_butoh_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-piece sb-spread__img"} -->
<figure class="wp-block-image size-full sb-piece sb-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cloth.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sb-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sb-rooms"><!-- wp:group {"className": "sb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-room__img"} -->
<figure class="wp-block-image size-full sb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/field.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sb-room__title"} -->
<h3 class="wp-block-heading sb-room__title"><?php echo esc_html( shirayami_butoh_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-room__facts"} -->
<p class="sb-room__facts"><?php echo esc_html( shirayami_butoh_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-room__text"} -->
<p class="sb-room__text"><?php echo esc_html( shirayami_butoh_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-room__img"} -->
<figure class="wp-block-image size-full sb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rehearsal.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sb-room__title"} -->
<h3 class="wp-block-heading sb-room__title"><?php echo esc_html( shirayami_butoh_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-room__facts"} -->
<p class="sb-room__facts"><?php echo esc_html( shirayami_butoh_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-room__text"} -->
<p class="sb-room__text"><?php echo esc_html( shirayami_butoh_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-room__img"} -->
<figure class="wp-block-image size-full sb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sb-room__title"} -->
<h3 class="wp-block-heading sb-room__title"><?php echo esc_html( shirayami_butoh_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-room__facts"} -->
<p class="sb-room__facts"><?php echo esc_html( shirayami_butoh_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-room__text"} -->
<p class="sb-room__text"><?php echo esc_html( shirayami_butoh_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sb-room", "layout": {"type": "default"}} -->
<div class="wp-block-group sb-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sb-room__img"} -->
<figure class="wp-block-image size-full sb-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/costume.webp' ) ); ?>" alt="<?php echo esc_attr( shirayami_butoh_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sb-room__title"} -->
<h3 class="wp-block-heading sb-room__title"><?php echo esc_html( shirayami_butoh_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-room__facts"} -->
<p class="sb-room__facts"><?php echo esc_html( shirayami_butoh_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sb-room__text"} -->
<p class="sb-room__text"><?php echo esc_html( shirayami_butoh_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "sb-more"} -->
<div class="wp-block-buttons sb-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/repertoire/"><?php echo esc_html( shirayami_butoh_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
