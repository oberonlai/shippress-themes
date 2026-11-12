<?php
/**
 * Title: Home: mitred frame window
 * Slug: gaku-frames/front-hero
 * Categories: gaku-frames
 * Keywords: hero, frame, window, photos, parallax
 * Viewport Width: 1440
 * Description: A walnut picture frame with four visible 45-degree mitre joints holds three butted low-key photographs; one centred label, a dark "on the bench" card docked over the frame's corner, and a vertical rule with a small caption.
 */
?>
<!-- wp:group {"align":"full","className":"gk-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-hero"><!-- wp:group {"className":"gk-stage","layout":{"type":"default"}} -->
<div class="wp-block-group gk-stage"><!-- wp:group {"className":"gk-frame-window","layout":{"type":"default"}} -->
<div class="wp-block-group gk-frame-window"><!-- wp:columns {"isStackedOnMobile":false,"className":"gk-cols"} -->
<div class="wp-block-columns is-not-stacked-on-mobile gk-cols"><!-- wp:column {"className":"gk-col gk-col--1 sp-parallax"} -->
<div class="wp-block-column gk-col gk-col--1 sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-bench-corner.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'a27185055' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"gk-col gk-col--2 sp-parallax"} -->
<div class="wp-block-column gk-col gk-col--2 sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-sample-corners.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'ad1d4567d' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"gk-col gk-col--3 sp-parallax"} -->
<div class="wp-block-column gk-col gk-col--3 sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-frame-on-wall.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'a122712b9' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-seam-label","layout":{"type":"default"}} -->
<div class="wp-block-group gk-seam-label"><!-- wp:heading {"level":1,"className":"gk-seam-label__h"} -->
<h1 class="wp-block-heading gk-seam-label__h"><a href="/book/"><?php echo wp_kses_post( gaku_frames_t( 'k77b31260' ) ); ?></a></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-vrule","layout":{"type":"default"}} -->
<div class="wp-block-group gk-vrule"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gk-vcaption"} -->
<p class="gk-vcaption"><?php echo wp_kses_post( gaku_frames_t( 'k0f887a62' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"gk-bench-card","layout":{"type":"default"}} -->
<div class="wp-block-group gk-bench-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"gk-bench-card__img"} -->
<figure class="wp-block-image size-full gk-bench-card__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p04-clamped-frame.webp' ) ); ?>" alt="<?php echo esc_attr( gaku_frames_t( 'aa62f331a' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"gk-bench-card__text","layout":{"type":"default"}} -->
<div class="wp-block-group gk-bench-card__text"><!-- wp:paragraph {"className":"gk-bench-card__tag"} -->
<p class="gk-bench-card__tag"><a href="/book/">[ → ]</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-bench-card__label"} -->
<p class="gk-bench-card__label"><?php echo wp_kses_post( gaku_frames_t( 'k6ede78c8' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"gk-bench-card__title"} -->
<h3 class="wp-block-heading gk-bench-card__title"><?php echo wp_kses_post( gaku_frames_t( 'k44a0d273' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gk-bench-card__sub"} -->
<p class="gk-bench-card__sub"><?php echo wp_kses_post( gaku_frames_t( 'k672283fc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"gk-bench-card__hl"} -->
<p class="gk-bench-card__hl"><?php echo wp_kses_post( gaku_frames_t( 'k89f716bd' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
