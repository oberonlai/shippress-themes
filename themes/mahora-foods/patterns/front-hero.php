<?php
/**
 * Title: Home: hero and strip
 * Slug: mahora-foods/front-hero
 * Categories: mahora-foods
 * Keywords: staff cafeteria, lunchroom, contract catering
 * Viewport Width: 1440
 * Description: Photo left (parallax), headline with script line right, three-panel tabbed strip below.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mf-hero", "layout": {"type": "default"}} -->
<section class="wp-block-group alignfull mf-hero"><!-- wp:group {"className": "mf-hero__top", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-hero__top"><!-- wp:group {"className": "mf-hero__photo sp-parallax", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-hero__photo sp-parallax"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m01.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m01' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-hero__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-hero__text"><!-- wp:heading {"level": 1, "className": "mf-h1"} -->
<h1 class="wp-block-heading mf-h1"><?php echo esc_html( mahora_foods_t( 'h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mf-script mf-script--hero"} -->
<p class="mf-script mf-script--hero"><?php echo esc_html( mahora_foods_t( 'h1_s' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-hero__lead"} -->
<p class="mf-hero__lead"><?php echo esc_html( mahora_foods_t( 'h1_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className": "mf-hero__link"} -->
<p class="mf-hero__link"><a href="/how-we-work/"><?php echo esc_html( mahora_foods_t( 'h1_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-strip", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-strip"><!-- wp:group {"className": "mf-strip__panel", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-strip__panel"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m02.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m02' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab mf-tab--strip"} -->
<p class="mf-tab mf-tab--strip"><?php echo esc_html( mahora_foods_t( 'tab1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-strip__panel", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-strip__panel"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m03.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m03' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab mf-tab--strip"} -->
<p class="mf-tab mf-tab--strip"><?php echo esc_html( mahora_foods_t( 'tab2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-strip__panel", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-strip__panel"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/m04.webp' ) ); ?>" alt="<?php echo esc_attr( mahora_foods_t( 'alt_m04' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className": "mf-tab mf-tab--strip"} -->
<p class="mf-tab mf-tab--strip"><?php echo esc_html( mahora_foods_t( 'tab3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mf-strip__cue", "layout": {"type": "default"}} -->
<div class="wp-block-group mf-strip__cue"><!-- wp:paragraph {"className": "mf-cue__t"} -->
<p class="mf-cue__t"><?php echo esc_html( mahora_foods_t( 'cue' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
