<?php
/**
 * Title: Home: the day as a vertical scroll
 * Slug: karan-geta/home-waters
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: Five scenes of a kimono day (choose, be dressed, hair, walk the lanes, return by six) hung on a crimson spine that runs down the page like a hanging scroll; the dressing print sits beside the spine.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-scroll", "layout": {"type": "constrained"}} -->
<section id="kg-day" class="wp-block-group alignfull kg-section kg-scroll"><!-- wp:group {"align": "wide", "className": "kg-scroll__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-scroll__head"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'cat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'cat_title' ) ); ?></h2>
<!-- /wp:heading -->

<?php if ( '' !== karan_geta_t( 'rail_tate' ) ) : ?>
<!-- wp:paragraph {"className": "kg-tate"} -->
<p class="kg-tate"><?php echo esc_html( karan_geta_t( 'rail_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "kg-scroll__body", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-scroll__body"><!-- wp:group {"className": "kg-scroll__art", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scroll__art"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "kg-scroll__img"} -->
<figure class="wp-block-image size-full kg-scroll__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop.webp' ) ); ?>" alt="<?php echo esc_attr( karan_geta_t( 'alt_layers' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-scenes", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scenes"><!-- wp:group {"className": "kg-scene kg-scene--1", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scene kg-scene--1"><!-- wp:paragraph {"className": "kg-scene__no"} -->
<p class="kg-scene__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "kg-scene__title"} -->
<h3 class="wp-block-heading kg-scene__title"><?php echo esc_html( karan_geta_t( 'pin1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-scene__text"} -->
<p class="kg-scene__text"><?php echo esc_html( karan_geta_t( 'p1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-scene kg-scene--2", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scene kg-scene--2"><!-- wp:paragraph {"className": "kg-scene__no"} -->
<p class="kg-scene__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "kg-scene__title"} -->
<h3 class="wp-block-heading kg-scene__title"><?php echo esc_html( karan_geta_t( 'pin2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-scene__text"} -->
<p class="kg-scene__text"><?php echo esc_html( karan_geta_t( 'p2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-scene kg-scene--3", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scene kg-scene--3"><!-- wp:paragraph {"className": "kg-scene__no"} -->
<p class="kg-scene__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "kg-scene__title"} -->
<h3 class="wp-block-heading kg-scene__title"><?php echo esc_html( karan_geta_t( 'pin3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-scene__text"} -->
<p class="kg-scene__text"><?php echo esc_html( karan_geta_t( 'p3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-scene kg-scene--4", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scene kg-scene--4"><!-- wp:paragraph {"className": "kg-scene__no"} -->
<p class="kg-scene__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "kg-scene__title"} -->
<h3 class="wp-block-heading kg-scene__title"><?php echo esc_html( karan_geta_t( 'pin4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-scene__text"} -->
<p class="kg-scene__text"><?php echo esc_html( karan_geta_t( 'p4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "kg-scene kg-scene--5", "layout": {"type": "default"}} -->
<div class="wp-block-group kg-scene kg-scene--5"><!-- wp:paragraph {"className": "kg-scene__no"} -->
<p class="kg-scene__no">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "kg-scene__title"} -->
<h3 class="wp-block-heading kg-scene__title"><?php echo esc_html( karan_geta_t( 'pin5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-scene__text"} -->
<p class="kg-scene__text"><?php echo esc_html( karan_geta_t( 'p5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
