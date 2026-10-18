<?php
/**
 * Title: Home: the services
 * Slug: michishirube-consulting/home-works
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: The four services as a mosaic: the intro card, the Strategy, Operations, People and Succession cards and the boardroom photo.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-feature"><!-- wp:group {"align": "wide", "className": "mc-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-spread"><!-- wp:group {"className": "mc-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-spread__intro"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mc-sec__title mc-feature__title"} -->
<h2 class="wp-block-heading mc-sec__title mc-feature__title"><?php echo esc_html( michishirube_consulting_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-dropcap"} -->
<p class="mc-dropcap"><?php echo esc_html( michishirube_consulting_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-pull"} -->
<p class="mc-pull"><?php echo esc_html( michishirube_consulting_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-piece mc-spread__img"} -->
<figure class="wp-block-image size-full mc-piece mc-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/boardroom.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "mc-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mc-rooms"><!-- wp:group {"className": "mc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meeting.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mc-room__title"} -->
<h3 class="wp-block-heading mc-room__title"><?php echo esc_html( michishirube_consulting_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-room__facts"} -->
<p class="mc-room__facts"><?php echo esc_html( michishirube_consulting_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-room__text"} -->
<p class="mc-room__text"><?php echo esc_html( michishirube_consulting_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cards.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mc-room__title"} -->
<h3 class="wp-block-heading mc-room__title"><?php echo esc_html( michishirube_consulting_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-room__facts"} -->
<p class="mc-room__facts"><?php echo esc_html( michishirube_consulting_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-room__text"} -->
<p class="mc-room__text"><?php echo esc_html( michishirube_consulting_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mc-room__title"} -->
<h3 class="wp-block-heading mc-room__title"><?php echo esc_html( michishirube_consulting_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-room__facts"} -->
<p class="mc-room__facts"><?php echo esc_html( michishirube_consulting_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-room__text"} -->
<p class="mc-room__text"><?php echo esc_html( michishirube_consulting_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mc-room", "layout": {"type": "default"}} -->
<div class="wp-block-group mc-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mc-room__img"} -->
<figure class="wp-block-image size-full mc-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk.webp' ) ); ?>" alt="<?php echo esc_attr( michishirube_consulting_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "mc-room__title"} -->
<h3 class="wp-block-heading mc-room__title"><?php echo esc_html( michishirube_consulting_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-room__facts"} -->
<p class="mc-room__facts"><?php echo esc_html( michishirube_consulting_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mc-room__text"} -->
<p class="mc-room__text"><?php echo esc_html( michishirube_consulting_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "mc-more"} -->
<div class="wp-block-buttons mc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( michishirube_consulting_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
