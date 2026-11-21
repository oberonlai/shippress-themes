<?php
/**
 * Title: Home: diagonal-split hero
 * Slug: enkai-rooms/front-hero
 * Categories: enkai-rooms
 * Keywords: hero, seam, private rooms
 * Viewport Width: 1440
 * Description: Two low-key photographs meet on one diagonal seam; the headline is split across the seam, with the seasonal caption and a scroll cue on it. No footer row.
 */
?>
<!-- wp:group {"align":"full","className":"er-hero sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-hero sp-parallax"><!-- wp:group {"className":"er-hero__half er-hero__half--l","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__half er-hero__half--l"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"er-hero__fig sp-parallax__layer"} -->
<figure class="wp-block-image size-full er-hero__fig sp-parallax__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p01-name-cards.webp' ) ); ?>" alt="<?php echo esc_attr( enkai_rooms_t( 'a612b70a6' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-hero__half er-hero__half--r","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__half er-hero__half--r"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"er-hero__fig sp-parallax__layer"} -->
<figure class="wp-block-image size-full er-hero__fig sp-parallax__layer"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-first-course.webp' ) ); ?>" alt="<?php echo esc_attr( enkai_rooms_t( 'a4ba34c31' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-hero__seam","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__seam"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-hero__ov","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__ov"><!-- wp:group {"className":"er-hero__text","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__text"><!-- wp:heading {"level":1,"className":"er-hero__h1"} -->
<h1 class="wp-block-heading er-hero__h1"><span class="er-h1__a"><?php echo wp_kses_post( enkai_rooms_t( 'k51b75de1' ) ); ?></span> <span class="er-h1__b"><?php echo wp_kses_post( enkai_rooms_t( 'k4ea4450a' ) ); ?></span></h1>
<!-- /wp:heading -->

<!-- wp:group {"className":"er-hero__under","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__under"><!-- wp:paragraph {"className":"er-hero__lead"} -->
<p class="er-hero__lead"><?php echo wp_kses_post( enkai_rooms_t( 'kf646128c' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"er-hero__btn"} -->
<div class="wp-block-buttons er-hero__btn"><!-- wp:button {"className":"er-btn"} -->
<div class="wp-block-button er-btn"><a class="wp-block-button__link wp-element-button" href="/ask-about-a-date/"><?php echo wp_kses_post( enkai_rooms_t( 'k580016cb' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"er-hero__cap er-cap","layout":{"type":"default"}} -->
<div class="wp-block-group er-hero__cap er-cap"><!-- wp:paragraph {"className":"er-cap__1"} -->
<p class="er-cap__1"><?php echo wp_kses_post( enkai_rooms_t( 'k3c56db98' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-cap__2"} -->
<p class="er-cap__2"><em><?php echo wp_kses_post( enkai_rooms_t( 'kf7388ef4' ) ); ?></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-cap__cue"} -->
<p class="er-cap__cue"><a href="#evening"><?php echo wp_kses_post( enkai_rooms_t( 'k105078d2' ) ); ?><span class="er-chev"></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
