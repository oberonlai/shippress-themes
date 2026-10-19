<?php
/**
 * Title: About: the office
 * Slug: tanba-law/about-main
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Description: The story of the office beside a picture, a wide picture and what we promise.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-section tb-about", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-section tb-about"><!-- wp:group {"align": "wide", "className": "tb-about__story", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tb-about__story"><!-- wp:group {"className": "tb-about__text", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-about__text"><!-- wp:paragraph {"className": "tb-dropcap"} -->
<p class="tb-dropcap"><?php echo esc_html( tanba_law_t( 'about_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tanba_law_t( 'about_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tb-piece tb-about__img"} -->
<figure class="wp-block-image size-full tb-piece tb-about__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_meeting' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "tb-about__wide alignwide"} -->
<figure class="wp-block-image size-full tb-about__wide alignwide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( tanba_law_t( 'alt_meeting' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "tb-rules", "layout": {"type": "default"}} -->
<div class="wp-block-group tb-rules"><!-- wp:heading {"className": "tb-sec__title"} -->
<h2 class="wp-block-heading tb-sec__title"><?php echo esc_html( tanba_law_t( 'tools' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"className": "is-style-rule-list"} -->
<ul class="wp-block-list is-style-rule-list"><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'tool1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'tool2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'tool3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( tanba_law_t( 'tool4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
