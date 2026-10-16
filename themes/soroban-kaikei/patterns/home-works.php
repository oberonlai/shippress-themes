<?php
/**
 * Title: Home: services beside a sticky picture
 * Slug: soroban-kaikei/home-works
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: Sticky media: the charcoal column with the title and the adviser picture stays in view while four service cards scroll past.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-works", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-works"><!-- wp:group {"className": "sk-works__aside", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-works__aside"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'works_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'works_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-works__media"} -->
<figure class="wp-block-image size-full sk-works__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/advisor.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_window' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"className": "sk-more"} -->
<div class="wp-block-buttons sk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/services/"><?php echo esc_html( soroban_kaikei_t( 'works_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sk-works__page", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sk-works__page"><!-- wp:group {"className": "sk-work sk-work--a", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work sk-work--a"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-work__img"} -->
<figure class="wp-block-image size-full sk-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/service-returns.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_rooftop' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work__cap"><!-- wp:heading {"level": 3, "className": "sk-work__title"} -->
<h3 class="wp-block-heading sk-work__title"><?php echo esc_html( soroban_kaikei_t( 'w1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-work__facts"} -->
<p class="sk-work__facts"><?php echo esc_html( soroban_kaikei_t( 'w1_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sk-work__text"} -->
<p class="sk-work__text"><?php echo esc_html( soroban_kaikei_t( 'w1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-work sk-work--b", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work sk-work--b"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-work__img"} -->
<figure class="wp-block-image size-full sk-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/service-books.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_seaside' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work__cap"><!-- wp:heading {"level": 3, "className": "sk-work__title"} -->
<h3 class="wp-block-heading sk-work__title"><?php echo esc_html( soroban_kaikei_t( 'w2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-work__facts"} -->
<p class="sk-work__facts"><?php echo esc_html( soroban_kaikei_t( 'w2_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sk-work__text"} -->
<p class="sk-work__text"><?php echo esc_html( soroban_kaikei_t( 'w2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-work sk-work--c", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work sk-work--c"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-work__img"} -->
<figure class="wp-block-image size-full sk-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/service-startup.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_ramen' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work__cap"><!-- wp:heading {"level": 3, "className": "sk-work__title"} -->
<h3 class="wp-block-heading sk-work__title"><?php echo esc_html( soroban_kaikei_t( 'w3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-work__facts"} -->
<p class="sk-work__facts"><?php echo esc_html( soroban_kaikei_t( 'w3_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sk-work__text"} -->
<p class="sk-work__text"><?php echo esc_html( soroban_kaikei_t( 'w3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sk-work sk-work--d", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work sk-work--d"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sk-work__img"} -->
<figure class="wp-block-image size-full sk-work__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/desk-receipts.webp' ) ); ?>" alt="<?php echo esc_attr( soroban_kaikei_t( 'alt_forest' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className": "sk-work__cap", "layout": {"type": "default"}} -->
<div class="wp-block-group sk-work__cap"><!-- wp:heading {"level": 3, "className": "sk-work__title"} -->
<h3 class="wp-block-heading sk-work__title"><?php echo esc_html( soroban_kaikei_t( 'w4_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-work__facts"} -->
<p class="sk-work__facts"><?php echo esc_html( soroban_kaikei_t( 'w4_f' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "sk-work__text"} -->
<p class="sk-work__text"><?php echo esc_html( soroban_kaikei_t( 'w4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
