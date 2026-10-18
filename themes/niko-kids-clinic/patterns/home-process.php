<?php
/**
 * Title: Home: the life-stage strip
 * Slug: niko-kids-clinic/home-process
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: Four life stages on one long horizontal strip, each a photo with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-process"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "nk-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-strip"><!-- wp:group {"className": "nk-step", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-step__img"} -->
<figure class="wp-block-image size-full nk-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/corridor.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-step__title"} -->
<h3 class="wp-block-heading nk-step__title"><?php echo esc_html( niko_kids_clinic_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-step__text"} -->
<p class="nk-step__text"><?php echo esc_html( niko_kids_clinic_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-step", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-step__img"} -->
<figure class="wp-block-image size-full nk-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blocks.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-step__title"} -->
<h3 class="wp-block-heading nk-step__title"><?php echo esc_html( niko_kids_clinic_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-step__text"} -->
<p class="nk-step__text"><?php echo esc_html( niko_kids_clinic_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-step", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-step__img"} -->
<figure class="wp-block-image size-full nk-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/waiting.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-step__title"} -->
<h3 class="wp-block-heading nk-step__title"><?php echo esc_html( niko_kids_clinic_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-step__text"} -->
<p class="nk-step__text"><?php echo esc_html( niko_kids_clinic_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "nk-step", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-step__img"} -->
<figure class="wp-block-image size-full nk-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/vaccine.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_canal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "nk-step__title"} -->
<h3 class="wp-block-heading nk-step__title"><?php echo esc_html( niko_kids_clinic_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-step__text"} -->
<p class="nk-step__text"><?php echo esc_html( niko_kids_clinic_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
