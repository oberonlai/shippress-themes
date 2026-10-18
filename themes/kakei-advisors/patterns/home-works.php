<?php
/**
 * Title: Home: the services as horizontal strips
 * Slug: kakei-advisors/home-works
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: The services intro beside a photo, then the four plans as horizontal strips: number, photo, title, facts and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-feature"><!-- wp:group {"align": "wide", "className": "ka-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-spread"><!-- wp:group {"className": "ka-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-spread__intro"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ka-sec__title ka-feature__title"} -->
<h2 class="wp-block-heading ka-sec__title ka-feature__title"><?php echo esc_html( kakei_advisors_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-dropcap"} -->
<p class="ka-dropcap"><?php echo esc_html( kakei_advisors_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-pull"} -->
<p class="ka-pull"><?php echo esc_html( kakei_advisors_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-spread__img"} -->
<figure class="wp-block-image size-full ka-piece ka-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "ka-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-rooms"><!-- wp:group {"className": "ka-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-room__img"} -->
<figure class="wp-block-image size-full ka-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-room__title"} -->
<h3 class="wp-block-heading ka-room__title"><?php echo esc_html( kakei_advisors_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-room__facts"} -->
<p class="ka-room__facts"><?php echo esc_html( kakei_advisors_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-room__text"} -->
<p class="ka-room__text"><?php echo esc_html( kakei_advisors_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-room__img"} -->
<figure class="wp-block-image size-full ka-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-room__title"} -->
<h3 class="wp-block-heading ka-room__title"><?php echo esc_html( kakei_advisors_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-room__facts"} -->
<p class="ka-room__facts"><?php echo esc_html( kakei_advisors_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-room__text"} -->
<p class="ka-room__text"><?php echo esc_html( kakei_advisors_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-room__img"} -->
<figure class="wp-block-image size-full ka-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-business.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-room__title"} -->
<h3 class="wp-block-heading ka-room__title"><?php echo esc_html( kakei_advisors_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-room__facts"} -->
<p class="ka-room__facts"><?php echo esc_html( kakei_advisors_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-room__text"} -->
<p class="ka-room__text"><?php echo esc_html( kakei_advisors_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-room__img"} -->
<figure class="wp-block-image size-full ka-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/review.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_review' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-room__title"} -->
<h3 class="wp-block-heading ka-room__title"><?php echo esc_html( kakei_advisors_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-room__facts"} -->
<p class="ka-room__facts"><?php echo esc_html( kakei_advisors_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ka-room__text"} -->
<p class="ka-room__text"><?php echo esc_html( kakei_advisors_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "ka-more"} -->
<div class="wp-block-buttons ka-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( kakei_advisors_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
