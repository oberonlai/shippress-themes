<?php
/**
 * Title: Home: your first visit
 * Slug: kanmi-dokoro/home-process
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Description: Four steps from the curtain to the last sip, each with a watercolour.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-process"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow"><?php echo esc_html( kanmi_dokoro_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kd-sec__title"} -->
<h2 class="wp-block-heading kd-sec__title"><?php echo esc_html( kanmi_dokoro_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "kd-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kd-strip"><!-- wp:group {"className": "kd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-step__img"} -->
<figure class="wp-block-image size-full kd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shop-front.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kd-step__title"} -->
<h3 class="wp-block-heading kd-step__title"><?php echo esc_html( kanmi_dokoro_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-step__text"} -->
<p class="kd-step__text"><?php echo esc_html( kanmi_dokoro_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-step__img"} -->
<figure class="wp-block-image size-full kd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sweet-anmitsu.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_ramen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kd-step__title"} -->
<h3 class="wp-block-heading kd-step__title"><?php echo esc_html( kanmi_dokoro_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-step__text"} -->
<p class="kd-step__text"><?php echo esc_html( kanmi_dokoro_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-step__img"} -->
<figure class="wp-block-image size-full kd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sweet-seasonal.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_seaside' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kd-step__title"} -->
<h3 class="wp-block-heading kd-step__title"><?php echo esc_html( kanmi_dokoro_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-step__text"} -->
<p class="kd-step__text"><?php echo esc_html( kanmi_dokoro_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group kd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kd-step__img"} -->
<figure class="wp-block-image size-full kd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea-room.webp' ) ); ?>" alt="<?php echo esc_attr( kanmi_dokoro_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kd-step__title"} -->
<h3 class="wp-block-heading kd-step__title"><?php echo esc_html( kanmi_dokoro_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-step__text"} -->
<p class="kd-step__text"><?php echo esc_html( kanmi_dokoro_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
