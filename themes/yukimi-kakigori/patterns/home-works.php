<?php
/**
 * Title: Home: the repertoire in one column
 * Slug: yukimi-kakigori/home-works
 * Categories: yukimi-kakigori
 * Keywords: kakigori, shaved ice, dessert
 * Viewport Width: 1440
 * Description: The menu as sticky media: the title, lead, pull quote and the ice-block picture hold still on the left while the four bowls scroll past on the right.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-feature"><!-- wp:group {"align": "wide", "className": "yk-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-spread"><!-- wp:group {"className": "yk-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-spread__intro"><!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow"><?php echo esc_html( yukimi_kakigori_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "yk-sec__title yk-feature__title"} -->
<h2 class="wp-block-heading yk-sec__title yk-feature__title"><?php echo esc_html( yukimi_kakigori_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-dropcap"} -->
<p class="yk-dropcap"><?php echo esc_html( yukimi_kakigori_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-pull"} -->
<p class="yk-pull"><?php echo esc_html( yukimi_kakigori_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-piece yk-spread__img"} -->
<figure class="wp-block-image size-full yk-piece yk-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ice-block.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "yk-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide yk-rooms"><!-- wp:group {"className": "yk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-room__img"} -->
<figure class="wp-block-image size-full yk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-ichigo.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "yk-room__title"} -->
<h3 class="wp-block-heading yk-room__title"><?php echo esc_html( yukimi_kakigori_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-room__facts"} -->
<p class="yk-room__facts"><?php echo esc_html( yukimi_kakigori_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-room__text"} -->
<p class="yk-room__text"><?php echo esc_html( yukimi_kakigori_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-room__img"} -->
<figure class="wp-block-image size-full yk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-matcha.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "yk-room__title"} -->
<h3 class="wp-block-heading yk-room__title"><?php echo esc_html( yukimi_kakigori_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-room__facts"} -->
<p class="yk-room__facts"><?php echo esc_html( yukimi_kakigori_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-room__text"} -->
<p class="yk-room__text"><?php echo esc_html( yukimi_kakigori_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-room__img"} -->
<figure class="wp-block-image size-full yk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-momo.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "yk-room__title"} -->
<h3 class="wp-block-heading yk-room__title"><?php echo esc_html( yukimi_kakigori_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-room__facts"} -->
<p class="yk-room__facts"><?php echo esc_html( yukimi_kakigori_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-room__text"} -->
<p class="yk-room__text"><?php echo esc_html( yukimi_kakigori_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "yk-room", "layout": {"type": "default"}} -->
<div class="wp-block-group yk-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "yk-room__img"} -->
<figure class="wp-block-image size-full yk-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-yuzu.webp' ) ); ?>" alt="<?php echo esc_attr( yukimi_kakigori_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "yk-room__title"} -->
<h3 class="wp-block-heading yk-room__title"><?php echo esc_html( yukimi_kakigori_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-room__facts"} -->
<p class="yk-room__facts"><?php echo esc_html( yukimi_kakigori_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "yk-room__text"} -->
<p class="yk-room__text"><?php echo esc_html( yukimi_kakigori_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "yk-more"} -->
<div class="wp-block-buttons yk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/ices/"><?php echo esc_html( yukimi_kakigori_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
