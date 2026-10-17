<?php
/**
 * Title: Home: how we work
 * Slug: teuchi-udon/home-process
 * Categories: teuchi-udon
 * Keywords: udon, noodles, restaurant
 * Viewport Width: 1440
 * Description: Four numbered steps from flour to bowl, each a pencil sketch with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-process"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "tu-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tu-strip"><!-- wp:group {"className": "tu-step", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-step__img"} -->
<figure class="wp-block-image size-full tu-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-kake.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-step__title"} -->
<h3 class="wp-block-heading tu-step__title"><?php echo esc_html( teuchi_udon_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-step__text"} -->
<p class="tu-step__text"><?php echo esc_html( teuchi_udon_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-step", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-step__img"} -->
<figure class="wp-block-image size-full tu-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-zaru.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-step__title"} -->
<h3 class="wp-block-heading tu-step__title"><?php echo esc_html( teuchi_udon_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-step__text"} -->
<p class="tu-step__text"><?php echo esc_html( teuchi_udon_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-step", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-step__img"} -->
<figure class="wp-block-image size-full tu-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bowl-kitsune.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-step__title"} -->
<h3 class="wp-block-heading tu-step__title"><?php echo esc_html( teuchi_udon_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-step__text"} -->
<p class="tu-step__text"><?php echo esc_html( teuchi_udon_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "tu-step", "layout": {"type": "default"}} -->
<div class="wp-block-group tu-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tu-step__img"} -->
<figure class="wp-block-image size-full tu-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/broth.webp' ) ); ?>" alt="<?php echo esc_attr( teuchi_udon_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "tu-step__title"} -->
<h3 class="wp-block-heading tu-step__title"><?php echo esc_html( teuchi_udon_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-step__text"} -->
<p class="tu-step__text"><?php echo esc_html( teuchi_udon_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
