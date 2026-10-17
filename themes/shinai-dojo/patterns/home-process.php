<?php
/**
 * Title: Home: a practice in four plates
 * Slug: shinai-dojo/home-process
 * Categories: shinai-dojo
 * Keywords: kendo, dojo, martial arts
 * Viewport Width: 1440
 * Description: Feature 03: four numbered steps of a practice, from the first bow to the last, each an isometric plate with a title and a line, on pale madder with the light asanoha pattern.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-process"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "sd-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sd-strip"><!-- wp:group {"className": "sd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-step__img"} -->
<figure class="wp-block-image size-full sd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/children.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-step__title"} -->
<h3 class="wp-block-heading sd-step__title"><?php echo esc_html( shinai_dojo_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-step__text"} -->
<p class="sd-step__text"><?php echo esc_html( shinai_dojo_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-step__img"} -->
<figure class="wp-block-image size-full sd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/footwork.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_footwork' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-step__title"} -->
<h3 class="wp-block-heading sd-step__title"><?php echo esc_html( shinai_dojo_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-step__text"} -->
<p class="sd-step__text"><?php echo esc_html( shinai_dojo_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-step__img"} -->
<figure class="wp-block-image size-full sd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/basics.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_basics' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-step__title"} -->
<h3 class="wp-block-heading sd-step__title"><?php echo esc_html( shinai_dojo_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-step__text"} -->
<p class="sd-step__text"><?php echo esc_html( shinai_dojo_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sd-step", "layout": {"type": "default"}} -->
<div class="wp-block-group sd-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sd-step__img"} -->
<figure class="wp-block-image size-full sd-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/mokuso.webp' ) ); ?>" alt="<?php echo esc_attr( shinai_dojo_t( 'alt_mokuso' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "sd-step__title"} -->
<h3 class="wp-block-heading sd-step__title"><?php echo esc_html( shinai_dojo_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-step__text"} -->
<p class="sd-step__text"><?php echo esc_html( shinai_dojo_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
