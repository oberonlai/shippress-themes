<?php
/**
 * Title: Home: two doors, for employers and for job seekers
 * Slug: nami-staffing/front-paths
 * Categories: nami-staffing
 * Keywords: employers, job seekers
 * Viewport Width: 1440
 * Description: White band: one photograph and paragraph for employers left of the centre line, one for job seekers on the right.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-band nf-spine nf-paths", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-band nf-spine nf-paths"><!-- wp:group {"className": "nf-paths__head", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-paths__head"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'front_paths_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_paths_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-split nf-split--even", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split nf-split--even"><!-- wp:group {"className": "nf-door", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-door"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/client-brief.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_door1_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level": 3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_door1_title' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_door1_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/employers/"><?php echo wp_kses_post( nami_staffing_t( 'front_door1_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-door nf-door--low", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-door nf-door--low"><!-- wp:image {"sizeSlug": "large", "linkDestination": "none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lobby.webp' ) ); ?>" alt="<?php echo esc_attr( nami_staffing_t( 'front_door2_alt' ) ); ?>"/></figure>
<!-- /wp:image --><!-- wp:heading {"level": 3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_door2_title' ) ); ?></h3>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( nami_staffing_t( 'front_door2_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/job-seekers/"><?php echo wp_kses_post( nami_staffing_t( 'front_door2_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
