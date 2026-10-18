<?php
/**
 * Title: About: the story
 * Slug: michishirube-consulting/about-main
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: The firm's story beside a sticky picture, a wide picture and what we keep.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-about"><!-- wp:group {"align": "wide", "className": "mc-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-about__story"><!-- wp:group {"className": "mc-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-about__text"><!-- wp:paragraph {"className": "mc-dropcap"} -->
<p class="mc-dropcap"><?php echo esc_html( michishirube_consulting_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-about__img"} -->
<figure class="wp-block-image size-full mc-piece mc-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-about__wide alignwide"} -->
<figure class="wp-block-image size-full mc-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/city.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_dusk' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "mc-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-rules"><!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( michishirube_consulting_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
