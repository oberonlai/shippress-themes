<?php
/**
 * Title: Home: five checks as masonry tiles
 * Slug: shirokuro-camera/home-waters
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: The five checks every camera passes before the shelf, as masonry tiles of different heights beside the tall clay repair picture. In Chinese and Japanese the section line is set vertically.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-steps", "layout": {"type": "constrained"}} -->
<section id="sc-day" class="wp-block-group alignfull sc-section sc-steps"><!-- wp:group {"align": "wide", "className": "sc-steps__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-steps__head"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'cat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'cat_title' ) ); ?></h2>
<!-- /wp:heading -->

<?php if ( '' !== shirokuro_camera_t( 'rail_tate' ) ) : ?>
<!-- wp:paragraph {"className": "sc-tate"} -->
<p class="sc-tate"><?php echo esc_html( shirokuro_camera_t( 'rail_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "sc-steps__strip", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-steps__strip"><!-- wp:group {"className": "sc-steps__art", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-steps__art"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "sc-steps__img"} -->
<figure class="wp-block-image size-full sc-steps__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/repair.webp' ) ); ?>" alt="<?php echo esc_attr( shirokuro_camera_t( 'alt_layers' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-steps__row", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-steps__row"><!-- wp:group {"className": "sc-step sc-step--1", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-step sc-step--1"><!-- wp:paragraph {"className": "sc-step__no"} -->
<p class="sc-step__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "sc-step__title"} -->
<h3 class="wp-block-heading sc-step__title"><?php echo esc_html( shirokuro_camera_t( 'pin1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-step__text"} -->
<p class="sc-step__text"><?php echo esc_html( shirokuro_camera_t( 'p1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-step sc-step--2", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-step sc-step--2"><!-- wp:paragraph {"className": "sc-step__no"} -->
<p class="sc-step__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "sc-step__title"} -->
<h3 class="wp-block-heading sc-step__title"><?php echo esc_html( shirokuro_camera_t( 'pin2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-step__text"} -->
<p class="sc-step__text"><?php echo esc_html( shirokuro_camera_t( 'p2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-step sc-step--3", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-step sc-step--3"><!-- wp:paragraph {"className": "sc-step__no"} -->
<p class="sc-step__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "sc-step__title"} -->
<h3 class="wp-block-heading sc-step__title"><?php echo esc_html( shirokuro_camera_t( 'pin3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-step__text"} -->
<p class="sc-step__text"><?php echo esc_html( shirokuro_camera_t( 'p3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-step sc-step--4", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-step sc-step--4"><!-- wp:paragraph {"className": "sc-step__no"} -->
<p class="sc-step__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "sc-step__title"} -->
<h3 class="wp-block-heading sc-step__title"><?php echo esc_html( shirokuro_camera_t( 'pin4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-step__text"} -->
<p class="sc-step__text"><?php echo esc_html( shirokuro_camera_t( 'p4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "sc-step sc-step--5", "layout": {"type": "default"}} -->
<div class="wp-block-group sc-step sc-step--5"><!-- wp:paragraph {"className": "sc-step__no"} -->
<p class="sc-step__no">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "sc-step__title"} -->
<h3 class="wp-block-heading sc-step__title"><?php echo esc_html( shirokuro_camera_t( 'pin5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-step__text"} -->
<p class="sc-step__text"><?php echo esc_html( shirokuro_camera_t( 'p5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
