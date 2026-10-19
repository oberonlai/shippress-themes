<?php
/**
 * Title: About: the office
 * Slug: asahi-gakuen/about-main
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-section ag-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-section ag-about"><!-- wp:group {"align": "wide", "className": "ag-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ag-about__story"><!-- wp:group {"className": "ag-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-about__text"><!-- wp:paragraph {"className": "ag-dropcap"} -->
<p class="ag-dropcap"><?php echo esc_html( asahi_gakuen_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( asahi_gakuen_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ag-piece ag-about__img"} -->
<figure class="wp-block-image size-full ag-piece ag-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campus.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_campus' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ag-about__wide alignwide"} -->
<figure class="wp-block-image size-full ag-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campus.webp' ) ); ?>" alt="<?php echo esc_attr( asahi_gakuen_t( 'alt_campus' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ag-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group ag-rules"><!-- wp:heading {"className": "ag-sec__title"} -->
<h2 class="wp-block-heading ag-sec__title"><?php echo esc_html( asahi_gakuen_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( asahi_gakuen_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
