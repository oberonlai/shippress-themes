<?php
/**
 * Title: Services: plan by plan
 * Slug: manabi-juku/works-main
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: The four plans as rows, each picture beside its long text, then a note and the synced fees.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-rows", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-rows"><!-- wp:group {"align": "wide", "className": "mj-rows__list", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-rows__list"><!-- wp:group {"className": "mj-row", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-row__img"} -->
<figure class="wp-block-image size-full mj-piece mj-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-primary.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row__text"><!-- wp:paragraph {"className": "mj-row__facts"} -->
<p class="mj-row__facts"><?php echo esc_html( manabi_juku_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-row__title"} -->
<h2 class="wp-block-heading mj-row__title"><?php echo esc_html( manabi_juku_t( 'r1_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'r1_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-row", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-row__img"} -->
<figure class="wp-block-image size-full mj-piece mj-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-junior.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row__text"><!-- wp:paragraph {"className": "mj-row__facts"} -->
<p class="mj-row__facts"><?php echo esc_html( manabi_juku_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-row__title"} -->
<h2 class="wp-block-heading mj-row__title"><?php echo esc_html( manabi_juku_t( 'r2_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'r2_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-row", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-row__img"} -->
<figure class="wp-block-image size-full mj-piece mj-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/grade-senior.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row__text"><!-- wp:paragraph {"className": "mj-row__facts"} -->
<p class="mj-row__facts"><?php echo esc_html( manabi_juku_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-row__title"} -->
<h2 class="wp-block-heading mj-row__title"><?php echo esc_html( manabi_juku_t( 'r3_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'r3_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mj-row", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mj-piece mj-row__img"} -->
<figure class="wp-block-image size-full mj-piece mj-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lab.webp' ) ); ?>" alt="<?php echo esc_attr( manabi_juku_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mj-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-row__text"><!-- wp:paragraph {"className": "mj-row__facts"} -->
<p class="mj-row__facts"><?php echo esc_html( manabi_juku_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-row__title"} -->
<h2 class="wp-block-heading mj-row__title"><?php echo esc_html( manabi_juku_t( 'r4_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-dropcap"} -->
<p class="mj-dropcap"><?php echo esc_html( manabi_juku_t( 'r4_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "mj-advice", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mj-advice"><!-- wp:group {"className": "mj-advice__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mj-advice__text"><!-- wp:heading {"level": 3, "className": "mj-sec__title"} -->
<h3 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'group_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'group_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "mj-links"} -->
<div class="wp-block-buttons mj-links"><!-- wp:button {"className": "mj-book"} -->
<div class="wp-block-button mj-book"><a class="wp-block-button__link wp-element-button" href="/trial/"><?php echo esc_html( manabi_juku_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"manabi-juku/rates"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
