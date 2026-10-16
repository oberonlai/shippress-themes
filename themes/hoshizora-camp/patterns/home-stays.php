<?php
/**
 * Title: Home: four ways to stay
 * Slug: hoshizora-camp/home-stays
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: Four watercolour cards in a staggered grid: bell tent, clear-roof dome, family tent and your own pitch.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-stays", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-stays"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'stays_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'stays_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align": "wide", "className": "hz-stays__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hz-stays__grid"><!-- wp:group {"className": "hz-stay hz-stay--bell", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-stay hz-stay--bell"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-stay__img"} -->
<figure class="wp-block-image size-full hz-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/belltent.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_bell' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hz-stay__title"} -->
<h3 class="wp-block-heading hz-stay__title"><?php echo esc_html( hoshizora_camp_t( 'bell_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-stay__text"} -->
<p class="hz-stay__text"><?php echo esc_html( hoshizora_camp_t( 'bell_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'bell_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-stay hz-stay--dome", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-stay hz-stay--dome"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-stay__img"} -->
<figure class="wp-block-image size-full hz-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dome.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_dome' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hz-stay__title"} -->
<h3 class="wp-block-heading hz-stay__title"><?php echo esc_html( hoshizora_camp_t( 'dome_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-stay__text"} -->
<p class="hz-stay__text"><?php echo esc_html( hoshizora_camp_t( 'dome_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'dome_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-stay hz-stay--family", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-stay hz-stay--family"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-stay__img"} -->
<figure class="wp-block-image size-full hz-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/campfire.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_fire' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hz-stay__title"} -->
<h3 class="wp-block-heading hz-stay__title"><?php echo esc_html( hoshizora_camp_t( 'family_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-stay__text"} -->
<p class="hz-stay__text"><?php echo esc_html( hoshizora_camp_t( 'family_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'family_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hz-stay hz-stay--pitch", "layout": {"type": "default"}} -->
<div class="wp-block-group hz-stay hz-stay--pitch"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hz-stay__img"} -->
<figure class="wp-block-image size-full hz-stay__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/meadow.webp' ) ); ?>" alt="<?php echo esc_attr( hoshizora_camp_t( 'alt_meadow' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level": 3, "className": "hz-stay__title"} -->
<h3 class="wp-block-heading hz-stay__title"><?php echo esc_html( hoshizora_camp_t( 'pitch_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-stay__text"} -->
<p class="hz-stay__text"><?php echo esc_html( hoshizora_camp_t( 'pitch_d' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "hz-stay__facts"} -->
<p class="hz-stay__facts"><?php echo esc_html( hoshizora_camp_t( 'pitch_f' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className": "hz-more"} -->
<div class="wp-block-buttons hz-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rooms/"><?php echo esc_html( hoshizora_camp_t( 'rates_more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
