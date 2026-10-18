<?php
/**
 * Title: Home: the life-stage strip
 * Slug: manabi-juku/home-process
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: Four life stages on one long horizontal strip, each a photo with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-process"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "mj-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-strip"><!-- wp:group {"className": "mj-step", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-step__img"} -->
<figure class="wp-block-image size-full mj-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-primary.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-step__title"} -->
<h3 class="wp-block-heading mj-step__title"><?php echo esc_html( manabi_juku_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-step__text"} -->
<p class="mj-step__text"><?php echo esc_html( manabi_juku_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-step", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-step__img"} -->
<figure class="wp-block-image size-full mj-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-junior.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-step__title"} -->
<h3 class="wp-block-heading mj-step__title"><?php echo esc_html( manabi_juku_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-step__text"} -->
<p class="mj-step__text"><?php echo esc_html( manabi_juku_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-step", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-step__img"} -->
<figure class="wp-block-image size-full mj-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-senior.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-step__title"} -->
<h3 class="wp-block-heading mj-step__title"><?php echo esc_html( manabi_juku_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-step__text"} -->
<p class="mj-step__text"><?php echo esc_html( manabi_juku_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-step", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-step__img"} -->
<figure class="wp-block-image size-full mj-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-exam.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mj-step__title"} -->
<h3 class="wp-block-heading mj-step__title"><?php echo esc_html( manabi_juku_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-step__text"} -->
<p class="mj-step__text"><?php echo esc_html( manabi_juku_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
