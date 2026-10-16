<?php
/**
 * Title: Home: selected works as a manga page
 * Slug: koma-manga/home-works
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: Four works laid out like a manga page: panels of different sizes with gutters and caption boxes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-works", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-works"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'works_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'works_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "km-works__page", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-works__page"><!-- wp:group {"className": "km-work km-work--a", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work km-work--a"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-work__img"} -->
<figure class="wp-block-image size-full km-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-rooftop.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_rooftop' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "km-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work__cap"><!-- wp:heading {"level": 3, "className": "km-work__title"} -->
<h3 class="wp-block-heading km-work__title"><?php echo esc_html( koma_manga_t( 'w1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-work__facts"} -->
<p class="km-work__facts"><?php echo esc_html( koma_manga_t( 'w1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "km-work__text"} -->
<p class="km-work__text"><?php echo esc_html( koma_manga_t( 'w1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-work km-work--b", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work km-work--b"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-work__img"} -->
<figure class="wp-block-image size-full km-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-seaside.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_seaside' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "km-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work__cap"><!-- wp:heading {"level": 3, "className": "km-work__title"} -->
<h3 class="wp-block-heading km-work__title"><?php echo esc_html( koma_manga_t( 'w2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-work__facts"} -->
<p class="km-work__facts"><?php echo esc_html( koma_manga_t( 'w2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "km-work__text"} -->
<p class="km-work__text"><?php echo esc_html( koma_manga_t( 'w2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-work km-work--c", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work km-work--c"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-work__img"} -->
<figure class="wp-block-image size-full km-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-ramen.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_ramen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "km-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work__cap"><!-- wp:heading {"level": 3, "className": "km-work__title"} -->
<h3 class="wp-block-heading km-work__title"><?php echo esc_html( koma_manga_t( 'w3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-work__facts"} -->
<p class="km-work__facts"><?php echo esc_html( koma_manga_t( 'w3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "km-work__text"} -->
<p class="km-work__text"><?php echo esc_html( koma_manga_t( 'w3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-work km-work--d", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work km-work--d"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-work__img"} -->
<figure class="wp-block-image size-full km-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/work-forest.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_forest' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "km-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group km-work__cap"><!-- wp:heading {"level": 3, "className": "km-work__title"} -->
<h3 class="wp-block-heading km-work__title"><?php echo esc_html( koma_manga_t( 'w4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-work__facts"} -->
<p class="km-work__facts"><?php echo esc_html( koma_manga_t( 'w4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "km-work__text"} -->
<p class="km-work__text"><?php echo esc_html( koma_manga_t( 'w4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "km-more"} -->
<div class="wp-block-buttons km-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/works/"><?php echo esc_html( koma_manga_t( 'works_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
