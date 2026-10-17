<?php
/**
 * Title: Home: your first lesson in four steps
 * Slug: fukusa-chado/home-process
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: Four numbered step cards, each a small clay picture with a title and a line.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-process", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-process"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'process_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "fc-sec__title"} -->
<h2 class="wp-block-heading fc-sec__title"><?php echo esc_html( fukusa_chado_t( 'process_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "fc-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-strip"><!-- wp:group {"className": "fc-step", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-step__img"} -->
<figure class="wp-block-image size-full fc-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/flower.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_host' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "fc-step__title"} -->
<h3 class="wp-block-heading fc-step__title"><?php echo esc_html( fukusa_chado_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-step__text"} -->
<p class="fc-step__text"><?php echo esc_html( fukusa_chado_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-step", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-step__img"} -->
<figure class="wp-block-image size-full fc-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "fc-step__title"} -->
<h3 class="wp-block-heading fc-step__title"><?php echo esc_html( fukusa_chado_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-step__text"} -->
<p class="fc-step__text"><?php echo esc_html( fukusa_chado_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-step", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-step__img"} -->
<figure class="wp-block-image size-full fc-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sweets.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "fc-step__title"} -->
<h3 class="wp-block-heading fc-step__title"><?php echo esc_html( fukusa_chado_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-step__text"} -->
<p class="fc-step__text"><?php echo esc_html( fukusa_chado_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-step", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-step"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-step__img"} -->
<figure class="wp-block-image size-full fc-step__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/utensils.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "fc-step__title"} -->
<h3 class="wp-block-heading fc-step__title"><?php echo esc_html( fukusa_chado_t( 's4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-step__text"} -->
<p class="fc-step__text"><?php echo esc_html( fukusa_chado_t( 's4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
