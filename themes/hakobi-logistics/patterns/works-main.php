<?php
/**
 * Title: Services: plan by plan
 * Slug: hakobi-logistics/works-main
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: The four plans as rows, each picture beside its long text, then a note and the synced fees.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-section hg-rows", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-section hg-rows"><!-- wp:group {"align": "wide", "className": "hg-rows__list", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hg-rows__list"><!-- wp:group {"className": "hg-row", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-row__img"} -->
<figure class="wp-block-image size-full hg-piece hg-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/depot.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_depot' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row__text"><!-- wp:paragraph {"className": "hg-row__facts"} -->
<p class="hg-row__facts"><?php echo esc_html( hakobi_logistics_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hg-row__title"} -->
<h2 class="wp-block-heading hg-row__title"><?php echo esc_html( hakobi_logistics_t( 'r1_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-dropcap"} -->
<p class="hg-dropcap"><?php echo esc_html( hakobi_logistics_t( 'r1_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hg-row", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-row__img"} -->
<figure class="wp-block-image size-full hg-piece hg-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yard.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_yard' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row__text"><!-- wp:paragraph {"className": "hg-row__facts"} -->
<p class="hg-row__facts"><?php echo esc_html( hakobi_logistics_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hg-row__title"} -->
<h2 class="wp-block-heading hg-row__title"><?php echo esc_html( hakobi_logistics_t( 'r2_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-dropcap"} -->
<p class="hg-dropcap"><?php echo esc_html( hakobi_logistics_t( 'r2_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hg-row", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-row__img"} -->
<figure class="wp-block-image size-full hg-piece hg-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/van.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_van' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row__text"><!-- wp:paragraph {"className": "hg-row__facts"} -->
<p class="hg-row__facts"><?php echo esc_html( hakobi_logistics_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hg-row__title"} -->
<h2 class="wp-block-heading hg-row__title"><?php echo esc_html( hakobi_logistics_t( 'r3_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-dropcap"} -->
<p class="hg-dropcap"><?php echo esc_html( hakobi_logistics_t( 'r3_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hg-row", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-row__img"} -->
<figure class="wp-block-image size-full hg-piece hg-row__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dock.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_dock' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-row__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-row__text"><!-- wp:paragraph {"className": "hg-row__facts"} -->
<p class="hg-row__facts"><?php echo esc_html( hakobi_logistics_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hg-row__title"} -->
<h2 class="wp-block-heading hg-row__title"><?php echo esc_html( hakobi_logistics_t( 'r4_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-dropcap"} -->
<p class="hg-dropcap"><?php echo esc_html( hakobi_logistics_t( 'r4_long' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hg-advice", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hg-advice"><!-- wp:group {"className": "hg-advice__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-advice__text"><!-- wp:heading {"level": 3, "className": "hg-sec__title"} -->
<h3 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'group_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'group_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className": "hg-links"} -->
<div class="wp-block-buttons hg-links"><!-- wp:button {"className": "hg-book"} -->
<div class="wp-block-button hg-book"><a class="wp-block-button__link wp-element-button" href="/quote/"><?php echo esc_html( hakobi_logistics_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"hakobi-logistics/rates"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
