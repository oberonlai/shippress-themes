<?php
/**
 * Title: About: the office
 * Slug: hakobi-logistics/about-main
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-section hg-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-section hg-about"><!-- wp:group {"align": "wide", "className": "hg-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hg-about__story"><!-- wp:group {"className": "hg-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-about__text"><!-- wp:paragraph {"className": "hg-dropcap"} -->
<p class="hg-dropcap"><?php echo esc_html( hakobi_logistics_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-piece hg-about__img"} -->
<figure class="wp-block-image size-full hg-piece hg-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/van.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_van' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hg-about__wide alignwide"} -->
<figure class="wp-block-image size-full hg-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/depot.webp' ) ); ?>" alt="<?php echo esc_attr( hakobi_logistics_t( 'alt_depot' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hg-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group hg-rules"><!-- wp:heading {"className": "hg-sec__title"} -->
<h2 class="wp-block-heading hg-sec__title"><?php echo esc_html( hakobi_logistics_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hakobi_logistics_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
