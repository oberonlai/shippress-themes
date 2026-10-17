<?php
/**
 * Title: Home: the classes as a card mosaic
 * Slug: fukusa-chado/home-works
 * Categories: fukusa-chado
 * Keywords: tea ceremony, matcha, lessons
 * Viewport Width: 1440
 * Description: The four classes and a pull quote as a mosaic of rounded cards in different sizes: a large picture card, a green card, a tall picture card, a dark card with the kettle, the quote card and a small seasons card.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-feature"><!-- wp:group {"className": "fc-feature__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-feature__intro"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "fc-sec__title fc-feature__title"} -->
<h2 class="wp-block-heading fc-sec__title fc-feature__title"><?php echo esc_html( fukusa_chado_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-feature__lead"} -->
<p class="fc-feature__lead"><?php echo esc_html( fukusa_chado_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "fc-mosaic", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide fc-mosaic"><!-- wp:group {"className": "fc-card fc-card--a", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--a"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-card__img"} -->
<figure class="wp-block-image size-full fc-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lesson.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "fc-card__body", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card__body"><!-- wp:paragraph {"className": "fc-card__facts"} -->
<p class="fc-card__facts"><?php echo esc_html( fukusa_chado_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "fc-card__title"} -->
<h3 class="wp-block-heading fc-card__title"><?php echo esc_html( fukusa_chado_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-card__text"} -->
<p class="fc-card__text"><?php echo esc_html( fukusa_chado_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-card fc-card--b", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--b"><!-- wp:group {"className": "fc-card__body", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card__body"><!-- wp:paragraph {"className": "fc-card__facts"} -->
<p class="fc-card__facts"><?php echo esc_html( fukusa_chado_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "fc-card__title"} -->
<h3 class="wp-block-heading fc-card__title"><?php echo esc_html( fukusa_chado_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-card__text"} -->
<p class="fc-card__text"><?php echo esc_html( fukusa_chado_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-card fc-card--c", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--c"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-card__img"} -->
<figure class="wp-block-image size-full fc-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sweets.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "fc-card__body", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card__body"><!-- wp:paragraph {"className": "fc-card__facts"} -->
<p class="fc-card__facts"><?php echo esc_html( fukusa_chado_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "fc-card__title"} -->
<h3 class="wp-block-heading fc-card__title"><?php echo esc_html( fukusa_chado_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-card__text"} -->
<p class="fc-card__text"><?php echo esc_html( fukusa_chado_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-card fc-card--d", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--d"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-card__img"} -->
<figure class="wp-block-image size-full fc-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kettle.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "fc-card__body", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card__body"><!-- wp:paragraph {"className": "fc-card__facts"} -->
<p class="fc-card__facts"><?php echo esc_html( fukusa_chado_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "fc-card__title"} -->
<h3 class="wp-block-heading fc-card__title"><?php echo esc_html( fukusa_chado_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-card__text"} -->
<p class="fc-card__text"><?php echo esc_html( fukusa_chado_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-card fc-card--q", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--q"><!-- wp:paragraph {"className": "fc-pull"} -->
<p class="fc-pull"><?php echo esc_html( fukusa_chado_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "fc-card fc-card--e", "layout": {"type": "default"}} -->
<div class="wp-block-group fc-card fc-card--e"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "fc-card__img"} -->
<figure class="wp-block-image size-full fc-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/seasons.webp' ) ); ?>" alt="<?php echo esc_attr( fukusa_chado_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "fc-more"} -->
<div class="wp-block-buttons fc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/classes/"><?php echo esc_html( fukusa_chado_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
