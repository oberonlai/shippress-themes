<?php
/**
 * Title: Home: family story
 * Slug: michi-motors/front-family
 * Categories: michi-motors
 * Keywords: car dealership, cars, showroom
 * Viewport Width: 1440
 * Description: Narrative with a label, heading, crimson rule lead and a 4:5 photo.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mm-sec mm-family", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mm-sec mm-family"><!-- wp:group {"align": "wide", "className": "mm-grid mm-family__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide mm-grid mm-family__grid"><!-- wp:group {"className": "mm-family__text", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-family__text"><!-- wp:group {"className": "mm-head", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-head"><!-- wp:paragraph {"className":"mm-label"} -->
<p class="mm-label"><?php echo esc_html( michi_motors_t( 'front_family_1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mm-h"} -->
<h2 class="wp-block-heading mm-h"><?php echo michi_motors_lines( 'front_family_2' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mm-lead"} -->
<p class="mm-lead"><?php echo esc_html( michi_motors_t( 'front_family_3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"mm-body"} -->
<p class="mm-body"><?php echo esc_html( michi_motors_t( 'front_family_4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-body"} -->
<p class="mm-body"><?php echo esc_html( michi_motors_t( 'front_family_5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mm-more"} -->
<p class="mm-more"><a href="/about/"><?php echo esc_html( michi_motors_t( 'front_family_6' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "mm-family__photo", "layout": {"type": "default"}} -->
<div class="wp-block-group mm-family__photo"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "mm-family__img"} -->
<figure class="wp-block-image size-full mm-family__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/s2-family.webp' ) ); ?>" alt="<?php echo esc_attr( michi_motors_t( 'about_head_1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"mm-caption"} -->
<p class="mm-caption"><?php echo esc_html( michi_motors_t( 'front_family_7' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
