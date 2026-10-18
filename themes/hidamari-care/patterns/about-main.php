<?php
/**
 * Title: About: the office
 * Slug: hidamari-care/about-main
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-section hc-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-section hc-about"><!-- wp:group {"align": "wide", "className": "hc-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hc-about__story"><!-- wp:group {"className": "hc-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-about__text"><!-- wp:paragraph {"className": "hc-dropcap"} -->
<p class="hc-dropcap"><?php echo esc_html( hidamari_care_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hc-piece hc-about__img"} -->
<figure class="wp-block-image size-full hc-piece hc-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_tea' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hc-about__wide alignwide"} -->
<figure class="wp-block-image size-full hc-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_garden' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "hc-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group hc-rules"><!-- wp:heading {"className": "hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( hidamari_care_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
