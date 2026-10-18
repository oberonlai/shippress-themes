<?php
/**
 * Title: Home: the life-stage strip
 * Slug: kakei-advisors/home-process
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: Four life stages on one long horizontal strip, each a photo with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-process"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "ka-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-strip"><!-- wp:group {"className": "ka-step", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-step__img"} -->
<figure class="wp-block-image size-full ka-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-start.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-step__title"} -->
<h3 class="wp-block-heading ka-step__title"><?php echo esc_html( kakei_advisors_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-step__text"} -->
<p class="ka-step__text"><?php echo esc_html( kakei_advisors_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-step", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-step__img"} -->
<figure class="wp-block-image size-full ka-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-family.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-step__title"} -->
<h3 class="wp-block-heading ka-step__title"><?php echo esc_html( kakei_advisors_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-step__text"} -->
<p class="ka-step__text"><?php echo esc_html( kakei_advisors_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-step", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-step__img"} -->
<figure class="wp-block-image size-full ka-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-home.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-step__title"} -->
<h3 class="wp-block-heading ka-step__title"><?php echo esc_html( kakei_advisors_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-step__text"} -->
<p class="ka-step__text"><?php echo esc_html( kakei_advisors_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ka-step", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-step__img"} -->
<figure class="wp-block-image size-full ka-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/stage-retire.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ka-step__title"} -->
<h3 class="wp-block-heading ka-step__title"><?php echo esc_html( kakei_advisors_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-step__text"} -->
<p class="ka-step__text"><?php echo esc_html( kakei_advisors_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
