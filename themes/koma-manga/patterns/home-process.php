<?php
/**
 * Title: Home: how a page is made
 * Slug: koma-manga/home-process
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: A four-panel strip: storyboard, clay, pencils and inks.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-process"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "km-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide km-strip"><!-- wp:group {"className": "km-step", "layout": {"type": "default"}} -->
<div class="wp-block-group km-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-step__img"} -->
<figure class="wp-block-image size-full km-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/thumbnails.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_thumbs' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "km-step__title"} -->
<h3 class="wp-block-heading km-step__title"><?php echo esc_html( koma_manga_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-step__text"} -->
<p class="km-step__text"><?php echo esc_html( koma_manga_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-step", "layout": {"type": "default"}} -->
<div class="wp-block-group km-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-step__img"} -->
<figure class="wp-block-image size-full km-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_desk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "km-step__title"} -->
<h3 class="wp-block-heading km-step__title"><?php echo esc_html( koma_manga_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-step__text"} -->
<p class="km-step__text"><?php echo esc_html( koma_manga_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-step", "layout": {"type": "default"}} -->
<div class="wp-block-group km-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-step__img"} -->
<figure class="wp-block-image size-full km-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/artist-window.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "km-step__title"} -->
<h3 class="wp-block-heading km-step__title"><?php echo esc_html( koma_manga_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-step__text"} -->
<p class="km-step__text"><?php echo esc_html( koma_manga_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "km-step", "layout": {"type": "default"}} -->
<div class="wp-block-group km-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "km-step__img"} -->
<figure class="wp-block-image size-full km-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/inking.webp' ) ); ?>" alt="<?php echo esc_attr( koma_manga_t( 'alt_inking' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "km-step__title"} -->
<h3 class="wp-block-heading km-step__title"><?php echo esc_html( koma_manga_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-step__text"} -->
<p class="km-step__text"><?php echo esc_html( koma_manga_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
