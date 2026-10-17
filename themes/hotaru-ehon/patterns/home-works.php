<?php
/**
 * Title: Home: the services as long-column chapters
 * Slug: hotaru-ehon/home-works
 * Categories: hotaru-ehon
 * Keywords: picture book, illustration, illustrator
 * Viewport Width: 1440
 * Description: The services in one long column: the intro with a drop cap and a pull quote, then four numbered chapters whose torn, taped flat 2D pictures hang out into the margins.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-feature"><!-- wp:group {"align": "wide", "className": "ht-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-spread"><!-- wp:group {"className": "ht-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-spread__intro"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ht-sec__title ht-feature__title"} -->
<h2 class="wp-block-heading ht-sec__title ht-feature__title"><?php echo esc_html( hotaru_ehon_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-dropcap"} -->
<p class="ht-dropcap"><?php echo esc_html( hotaru_ehon_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-pull"} -->
<p class="ht-pull"><?php echo esc_html( hotaru_ehon_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-piece ht-spread__img"} -->
<figure class="wp-block-image size-full ht-piece ht-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shelf.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "ht-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide ht-rooms"><!-- wp:group {"className": "ht-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-room__img"} -->
<figure class="wp-block-image size-full ht-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-books.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_legal' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ht-room__title"} -->
<h3 class="wp-block-heading ht-room__title"><?php echo esc_html( hotaru_ehon_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-room__facts"} -->
<p class="ht-room__facts"><?php echo esc_html( hotaru_ehon_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-room__text"} -->
<p class="ht-room__text"><?php echo esc_html( hotaru_ehon_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-room__img"} -->
<figure class="wp-block-image size-full ht-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-cover.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ht-room__title"} -->
<h3 class="wp-block-heading ht-room__title"><?php echo esc_html( hotaru_ehon_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-room__facts"} -->
<p class="ht-room__facts"><?php echo esc_html( hotaru_ehon_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-room__text"} -->
<p class="ht-room__text"><?php echo esc_html( hotaru_ehon_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-room__img"} -->
<figure class="wp-block-image size-full ht-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-workshop.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ht-room__title"} -->
<h3 class="wp-block-heading ht-room__title"><?php echo esc_html( hotaru_ehon_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-room__facts"} -->
<p class="ht-room__facts"><?php echo esc_html( hotaru_ehon_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-room__text"} -->
<p class="ht-room__text"><?php echo esc_html( hotaru_ehon_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "ht-room", "layout": {"type": "default"}} -->
<div class="wp-block-group ht-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "ht-room__img"} -->
<figure class="wp-block-image size-full ht-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/svc-editorial.webp' ) ); ?>" alt="<?php echo esc_attr( hotaru_ehon_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "ht-room__title"} -->
<h3 class="wp-block-heading ht-room__title"><?php echo esc_html( hotaru_ehon_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-room__facts"} -->
<p class="ht-room__facts"><?php echo esc_html( hotaru_ehon_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "ht-room__text"} -->
<p class="ht-room__text"><?php echo esc_html( hotaru_ehon_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "ht-more"} -->
<div class="wp-block-buttons ht-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/books/"><?php echo esc_html( hotaru_ehon_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
