<?php
/**
 * Title: Home: recent work, split screen
 * Slug: kanna-komuten/home-works
 * Categories: kanna-komuten
 * Keywords: carpenter, machiya, renovation
 * Viewport Width: 1440
 * Description: Recent work as a split screen: the title, the lead with a drop cap and a pull quote on one half, a tall photograph on the other, then four projects on a grid.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-feature", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-feature"><!-- wp:group {"align": "wide", "className": "kn-spread", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-spread"><!-- wp:group {"className": "kn-spread__intro", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-spread__intro"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'f_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kn-sec__title kn-feature__title"} -->
<h2 class="wp-block-heading kn-sec__title kn-feature__title"><?php echo esc_html( kanna_komuten_t( 'f_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-dropcap"} -->
<p class="kn-dropcap"><?php echo esc_html( kanna_komuten_t( 'f_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-pull"} -->
<p class="kn-pull"><?php echo esc_html( kanna_komuten_t( 'f_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-piece kn-spread__img"} -->
<figure class="wp-block-image size-full kn-piece kn-spread__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/courtyard.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_court' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kn-rooms", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kn-rooms"><!-- wp:group {"className": "kn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-room__img"} -->
<figure class="wp-block-image size-full kn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lattice.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_lattice' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kn-room__title"} -->
<h3 class="wp-block-heading kn-room__title"><?php echo esc_html( kanna_komuten_t( 'r1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-room__facts"} -->
<p class="kn-room__facts"><?php echo esc_html( kanna_komuten_t( 'r1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-room__text"} -->
<p class="kn-room__text"><?php echo esc_html( kanna_komuten_t( 'r1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-room__img"} -->
<figure class="wp-block-image size-full kn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tatami-room.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_tatami' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kn-room__title"} -->
<h3 class="wp-block-heading kn-room__title"><?php echo esc_html( kanna_komuten_t( 'r2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-room__facts"} -->
<p class="kn-room__facts"><?php echo esc_html( kanna_komuten_t( 'r2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-room__text"} -->
<p class="kn-room__text"><?php echo esc_html( kanna_komuten_t( 'r2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-room__img"} -->
<figure class="wp-block-image size-full kn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/beam.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_bath' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kn-room__title"} -->
<h3 class="wp-block-heading kn-room__title"><?php echo esc_html( kanna_komuten_t( 'r3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-room__facts"} -->
<p class="kn-room__facts"><?php echo esc_html( kanna_komuten_t( 'r3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-room__text"} -->
<p class="kn-room__text"><?php echo esc_html( kanna_komuten_t( 'r3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kn-room", "layout": {"type": "default"}} -->
<div class="wp-block-group kn-room"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kn-room__img"} -->
<figure class="wp-block-image size-full kn-room__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/kitchen.webp' ) ); ?>" alt="<?php echo esc_attr( kanna_komuten_t( 'alt_kitchen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "kn-room__title"} -->
<h3 class="wp-block-heading kn-room__title"><?php echo esc_html( kanna_komuten_t( 'r4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-room__facts"} -->
<p class="kn-room__facts"><?php echo esc_html( kanna_komuten_t( 'r4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "kn-room__text"} -->
<p class="kn-room__text"><?php echo esc_html( kanna_komuten_t( 'r4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "kn-more"} -->
<div class="wp-block-buttons kn-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/works/"><?php echo esc_html( kanna_komuten_t( 'f_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
