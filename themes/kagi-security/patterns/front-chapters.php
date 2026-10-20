<?php
/**
 * Title: Home: four photographed chapters
 * Slug: kagi-security/front-chapters
 * Categories: kagi-security
 * Keywords: response, chapters, process
 * Viewport Width: 1440
 * Description: How we respond as four short photographed chapters (watch, triage, respond, report), each with label chips and a time, photos alternating sides.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-nightch","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-nightch"><!-- wp:group {"className":"ks-nightch__head","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-nightch__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_ch_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_ch_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kagi_security_t( 'front_ch_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-nightch__rows","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-nightch__rows"><!-- wp:group {"className":"ks-chapter-row ks-chapter-row--1","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row ks-chapter-row--1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-chapter-row__photo"} -->
<figure class="wp-block-image size-full ks-chapter-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ch-watch.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_ch_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-chapter-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__text"><!-- wp:group {"className":"ks-chapter-row__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__tags"><!-- wp:paragraph {"className":"ks-chip ks-chip--small"} -->
<p class="ks-chip ks-chip--small"><?php echo wp_kses_post( kagi_security_t( 'front_ch_no1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--small ks-chip--off"} -->
<p class="ks-chip ks-chip--small ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_ch_name1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chapter-row__time"} -->
<p class="ks-chapter-row__time"><?php echo wp_kses_post( kagi_security_t( 'front_ch_time1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-chapter-row__title"} -->
<h3 class="wp-block-heading ks-chapter-row__title"><?php echo wp_kses_post( kagi_security_t( 'front_ch_h1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_ch_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-chapter-row ks-chapter-row--2","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row ks-chapter-row--2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-chapter-row__photo"} -->
<figure class="wp-block-image size-full ks-chapter-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ch-triage.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_ch_img2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-chapter-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__text"><!-- wp:group {"className":"ks-chapter-row__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__tags"><!-- wp:paragraph {"className":"ks-chip ks-chip--small"} -->
<p class="ks-chip ks-chip--small"><?php echo wp_kses_post( kagi_security_t( 'front_ch_no2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--small ks-chip--off"} -->
<p class="ks-chip ks-chip--small ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_ch_name2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chapter-row__time"} -->
<p class="ks-chapter-row__time"><?php echo wp_kses_post( kagi_security_t( 'front_ch_time2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-chapter-row__title"} -->
<h3 class="wp-block-heading ks-chapter-row__title"><?php echo wp_kses_post( kagi_security_t( 'front_ch_h2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_ch_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-chapter-row ks-chapter-row--3","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row ks-chapter-row--3"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-chapter-row__photo"} -->
<figure class="wp-block-image size-full ks-chapter-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ch-respond.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_ch_img3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-chapter-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__text"><!-- wp:group {"className":"ks-chapter-row__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__tags"><!-- wp:paragraph {"className":"ks-chip ks-chip--small"} -->
<p class="ks-chip ks-chip--small"><?php echo wp_kses_post( kagi_security_t( 'front_ch_no3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--small ks-chip--off"} -->
<p class="ks-chip ks-chip--small ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_ch_name3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chapter-row__time"} -->
<p class="ks-chapter-row__time"><?php echo wp_kses_post( kagi_security_t( 'front_ch_time3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-chapter-row__title"} -->
<h3 class="wp-block-heading ks-chapter-row__title"><?php echo wp_kses_post( kagi_security_t( 'front_ch_h3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_ch_p3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-chapter-row ks-chapter-row--4","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row ks-chapter-row--4"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ks-chapter-row__photo"} -->
<figure class="wp-block-image size-full ks-chapter-row__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/ch-report.webp' ) ); ?>" alt="<?php echo esc_attr( kagi_security_t( 'front_ch_img4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ks-chapter-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__text"><!-- wp:group {"className":"ks-chapter-row__tags","layout":{"type":"default"}} -->
<div class="wp-block-group ks-chapter-row__tags"><!-- wp:paragraph {"className":"ks-chip ks-chip--small"} -->
<p class="ks-chip ks-chip--small"><?php echo wp_kses_post( kagi_security_t( 'front_ch_no4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chip ks-chip--small ks-chip--off"} -->
<p class="ks-chip ks-chip--small ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_ch_name4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-chapter-row__time"} -->
<p class="ks-chapter-row__time"><?php echo wp_kses_post( kagi_security_t( 'front_ch_time4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"ks-chapter-row__title"} -->
<h3 class="wp-block-heading ks-chapter-row__title"><?php echo wp_kses_post( kagi_security_t( 'front_ch_h4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_ch_p4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ks-nightch__more"} -->
<div class="wp-block-buttons ks-nightch__more"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/how-we-respond/"><?php echo wp_kses_post( kagi_security_t( 'front_ch_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
