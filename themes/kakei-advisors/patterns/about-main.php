<?php
/**
 * Title: About: the office
 * Slug: kakei-advisors/about-main
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-about"><!-- wp:group {"align": "wide", "className": "ka-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ka-about__story"><!-- wp:group {"className": "ka-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-about__text"><!-- wp:paragraph {"className": "ka-dropcap"} -->
<p class="ka-dropcap"><?php echo esc_html( kakei_advisors_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-piece ka-about__img"} -->
<figure class="wp-block-image size-full ka-piece ka-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ka-about__wide alignwide"} -->
<figure class="wp-block-image size-full ka-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/office.webp' ) ); ?>" alt="<?php echo esc_attr( kakei_advisors_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "ka-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group ka-rules"><!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kakei_advisors_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
