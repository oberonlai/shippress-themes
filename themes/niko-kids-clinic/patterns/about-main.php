<?php
/**
 * Title: About: the office
 * Slug: niko-kids-clinic/about-main
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-about"><!-- wp:group {"align": "wide", "className": "nk-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide nk-about__story"><!-- wp:group {"className": "nk-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-about__text"><!-- wp:paragraph {"className": "nk-dropcap"} -->
<p class="nk-dropcap"><?php echo esc_html( niko_kids_clinic_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-piece nk-about__img"} -->
<figure class="wp-block-image size-full nk-piece nk-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hands.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "nk-about__wide alignwide"} -->
<figure class="wp-block-image size-full nk-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/building.webp' ) ); ?>" alt="<?php echo esc_attr( niko_kids_clinic_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "nk-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group nk-rules"><!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( niko_kids_clinic_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
