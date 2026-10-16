<?php
/**
 * Title: Home: the course as a horizontal strip
 * Slug: tasuki-ekiden/home-works
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The konpeki band with the title row and the team painting; the legs of the course run as one strip of cards that scrolls sideways.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-works", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-works"><!-- wp:group {"className": "te-works__aside", "layout": {"type": "default"}} -->
<div class="wp-block-group te-works__aside"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow"><?php echo esc_html( tasuki_ekiden_t( 'works_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "te-sec__title"} -->
<h2 class="wp-block-heading te-sec__title"><?php echo esc_html( tasuki_ekiden_t( 'works_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-works__media"} -->
<figure class="wp-block-image size-full te-works__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/team.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className": "te-more"} -->
<div class="wp-block-buttons te-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/course/"><?php echo esc_html( tasuki_ekiden_t( 'works_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "te-works__page", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide te-works__page"><!-- wp:group {"className": "te-work te-work--a", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work te-work--a"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-work__img"} -->
<figure class="wp-block-image size-full te-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/relay-zone.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_rooftop' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work__cap"><!-- wp:heading {"level": 3, "className": "te-work__title"} -->
<h3 class="wp-block-heading te-work__title"><?php echo esc_html( tasuki_ekiden_t( 'w1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-work__facts"} -->
<p class="te-work__facts"><?php echo esc_html( tasuki_ekiden_t( 'w1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "te-work__text"} -->
<p class="te-work__text"><?php echo esc_html( tasuki_ekiden_t( 'w1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-work te-work--b", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work te-work--b"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-work__img"} -->
<figure class="wp-block-image size-full te-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/course.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_seaside' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work__cap"><!-- wp:heading {"level": 3, "className": "te-work__title"} -->
<h3 class="wp-block-heading te-work__title"><?php echo esc_html( tasuki_ekiden_t( 'w2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-work__facts"} -->
<p class="te-work__facts"><?php echo esc_html( tasuki_ekiden_t( 'w2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "te-work__text"} -->
<p class="te-work__text"><?php echo esc_html( tasuki_ekiden_t( 'w2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-work te-work--c", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work te-work--c"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-work__img"} -->
<figure class="wp-block-image size-full te-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shoes.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_ramen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work__cap"><!-- wp:heading {"level": 3, "className": "te-work__title"} -->
<h3 class="wp-block-heading te-work__title"><?php echo esc_html( tasuki_ekiden_t( 'w3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-work__facts"} -->
<p class="te-work__facts"><?php echo esc_html( tasuki_ekiden_t( 'w3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "te-work__text"} -->
<p class="te-work__text"><?php echo esc_html( tasuki_ekiden_t( 'w3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "te-work te-work--d", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work te-work--d"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "te-work__img"} -->
<figure class="wp-block-image size-full te-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/training.webp' ) ); ?>" alt="<?php echo esc_attr( tasuki_ekiden_t( 'alt_forest' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "te-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group te-work__cap"><!-- wp:heading {"level": 3, "className": "te-work__title"} -->
<h3 class="wp-block-heading te-work__title"><?php echo esc_html( tasuki_ekiden_t( 'w4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-work__facts"} -->
<p class="te-work__facts"><?php echo esc_html( tasuki_ekiden_t( 'w4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "te-work__text"} -->
<p class="te-work__text"><?php echo esc_html( tasuki_ekiden_t( 'w4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
