<?php
/**
 * Title: Home: the life-stage strip
 * Slug: seimitsu-works/home-process
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: Four life stages on one long horizontal strip, each a photo with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-process"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "sw-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sw-strip"><!-- wp:group {"className": "sw-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-step__img"} -->
<figure class="wp-block-image size-full sw-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spindle.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-step__title"} -->
<h3 class="wp-block-heading sw-step__title"><?php echo esc_html( seimitsu_works_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-step__text"} -->
<p class="sw-step__text"><?php echo esc_html( seimitsu_works_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-step__img"} -->
<figure class="wp-block-image size-full sw-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tray.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-step__title"} -->
<h3 class="wp-block-heading sw-step__title"><?php echo esc_html( seimitsu_works_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-step__text"} -->
<p class="sw-step__text"><?php echo esc_html( seimitsu_works_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-step__img"} -->
<figure class="wp-block-image size-full sw-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hall.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-step__title"} -->
<h3 class="wp-block-heading sw-step__title"><?php echo esc_html( seimitsu_works_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-step__text"} -->
<p class="sw-step__text"><?php echo esc_html( seimitsu_works_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sw-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sw-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sw-step__img"} -->
<figure class="wp-block-image size-full sw-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pack.webp' ) ); ?>" alt="<?php echo esc_attr( seimitsu_works_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sw-step__title"} -->
<h3 class="wp-block-heading sw-step__title"><?php echo esc_html( seimitsu_works_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-step__text"} -->
<p class="sw-step__text"><?php echo esc_html( seimitsu_works_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
