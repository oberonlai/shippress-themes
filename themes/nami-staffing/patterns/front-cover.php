<?php
/**
 * Title: Home: two photographs around the opening line
 * Slug: nami-staffing/front-cover
 * Categories: nami-staffing
 * Keywords: hero, cover, first morning
 * Viewport Width: 1440
 * Description: Two documentary photographs either side of a narrow centre column with the opening line, flat corner labels on the photographs, the centre line starting under the title, and an info bar below.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-cover", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-cover"><!-- wp:group {"className": "nf-cover__grid", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-cover__grid"><!-- wp:group {"className": "nf-cover__ph nf-cover__ph--l", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-cover__ph nf-cover__ph--l"><!-- wp:paragraph {"className": "nf-corner nf-corner--green"} -->
<p class="nf-corner nf-corner--green"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_tag_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/first-morning.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_cover_alt_l' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-cover__mid", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-cover__mid"><!-- wp:paragraph {"className": "nf-cover__kicker"} -->
<p class="nf-cover__kicker"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_kicker' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level": 1, "className": "nf-cover__title"} -->
<h1 class="wp-block-heading nf-cover__title"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_title' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className": "nf-cover__lead"} -->
<p class="nf-cover__lead"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_lead' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className": "nf-cover__scroll"} -->
<p class="nf-cover__scroll"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_scroll' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-cover__ph nf-cover__ph--r", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-cover__ph nf-cover__ph--r"><!-- wp:paragraph {"className": "nf-corner nf-corner--terra"} -->
<p class="nf-corner nf-corner--terra"><?php echo wp_kses_post( nami_staffing_t( 'front_cover_tag_r' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/interview.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_cover_alt_r' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-infobar", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-infobar"><!-- wp:paragraph {"className": "nf-infobar__item"} -->
<p class="nf-infobar__item"><?php echo wp_kses_post( nami_staffing_t( 'front_bar_1' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className": "nf-infobar__item"} -->
<p class="nf-infobar__item"><?php echo wp_kses_post( nami_staffing_t( 'front_bar_2' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className": "nf-infobar__item"} -->
<p class="nf-infobar__item"><?php echo wp_kses_post( nami_staffing_t( 'front_bar_3' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className": "nf-infobar__item"} -->
<p class="nf-infobar__item"><?php echo wp_kses_post( nami_staffing_t( 'front_bar_4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
