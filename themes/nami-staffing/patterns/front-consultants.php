<?php
/**
 * Title: Home: three consultants in a sliding row
 * Slug: nami-staffing/front-consultants
 * Categories: nami-staffing
 * Keywords: team, consultants, people
 * Viewport Width: 1440
 * Description: Grey band: heading and pill on the left of the centre line, then three consultant cards in a horizontal row whose last card runs past the edge, with a thin progress line.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-band nf-band--grey nf-spine nf-people", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-band nf-band--grey nf-spine nf-people"><!-- wp:group {"className": "nf-split", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split"><!-- wp:group {"className": "nf-split__l", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__l"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'front_people_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_people_title' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/consultants/"><?php echo wp_kses_post( nami_staffing_t( 'front_people_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-split__r nf-prose", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__r nf-prose"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_people_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-rail", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-rail"><!-- wp:group {"className": "nf-card", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-card"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-sofia.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_c1_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className": "nf-card__role"} -->
<p class="nf-card__role"><?php echo wp_kses_post( nami_staffing_t( 'front_c1_role' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level": 3, "className": "nf-card__name"} -->
<h3 class="wp-block-heading nf-card__name"><?php echo wp_kses_post( nami_staffing_t( 'front_c1_name' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_c1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-card", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-card"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-daniel.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_c2_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className": "nf-card__role"} -->
<p class="nf-card__role"><?php echo wp_kses_post( nami_staffing_t( 'front_c2_role' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level": 3, "className": "nf-card__name"} -->
<h3 class="wp-block-heading nf-card__name"><?php echo wp_kses_post( nami_staffing_t( 'front_c2_name' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_c2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-card", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-card"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait-mei.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_c3_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className": "nf-card__role"} -->
<p class="nf-card__role"><?php echo wp_kses_post( nami_staffing_t( 'front_c3_role' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level": 3, "className": "nf-card__name"} -->
<h3 class="wp-block-heading nf-card__name"><?php echo wp_kses_post( nami_staffing_t( 'front_c3_name' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_c3_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:paragraph {"className": "nf-rail__hint"} -->
<p class="nf-rail__hint"><?php echo wp_kses_post( nami_staffing_t( 'front_people_hint' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
