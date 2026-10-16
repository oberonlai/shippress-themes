<?php
/**
 * Title: Home: the day as a vertical scroll
 * Slug: hanayui-kimono/home-waters
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: Five scenes of a kimono day (choose, be dressed, hair, walk the lanes, return by six) hung on a crimson spine that runs down the page like a hanging scroll; the dressing print sits beside the spine.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-scroll", "layout": {"type": "constrained"}} -->
<section id="hy-day" class="wp-block-group alignfull hy-section hy-scroll"><!-- wp:group {"align": "wide", "className": "hy-scroll__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-scroll__head"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'cat_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'cat_title' ) ); ?></h2>
<!-- /wp:heading -->

<?php if ( '' !== hanayui_kimono_t( 'rail_tate' ) ) : ?>
<!-- wp:paragraph {"className": "hy-tate"} -->
<p class="hy-tate"><?php echo esc_html( hanayui_kimono_t( 'rail_tate' ) ); ?></p>
<!-- /wp:paragraph -->
<?php endif; ?></div>
<!-- /wp:group -->

<!-- wp:group {"align": "wide", "className": "hy-scroll__body", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-scroll__body"><!-- wp:group {"className": "hy-scroll__art", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scroll__art"><!-- wp:image {"sizeSlug": "full", "linkDestination": "none", "className": "hy-scroll__img"} -->
<figure class="wp-block-image size-full hy-scroll__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/dressing.webp' ) ); ?>" alt="<?php echo esc_attr( hanayui_kimono_t( 'alt_layers' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-scenes", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scenes"><!-- wp:group {"className": "hy-scene hy-scene--1", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scene hy-scene--1"><!-- wp:paragraph {"className": "hy-scene__no"} -->
<p class="hy-scene__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "hy-scene__title"} -->
<h3 class="wp-block-heading hy-scene__title"><?php echo esc_html( hanayui_kimono_t( 'pin1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-scene__text"} -->
<p class="hy-scene__text"><?php echo esc_html( hanayui_kimono_t( 'p1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-scene hy-scene--2", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scene hy-scene--2"><!-- wp:paragraph {"className": "hy-scene__no"} -->
<p class="hy-scene__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "hy-scene__title"} -->
<h3 class="wp-block-heading hy-scene__title"><?php echo esc_html( hanayui_kimono_t( 'pin2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-scene__text"} -->
<p class="hy-scene__text"><?php echo esc_html( hanayui_kimono_t( 'p2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-scene hy-scene--3", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scene hy-scene--3"><!-- wp:paragraph {"className": "hy-scene__no"} -->
<p class="hy-scene__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "hy-scene__title"} -->
<h3 class="wp-block-heading hy-scene__title"><?php echo esc_html( hanayui_kimono_t( 'pin3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-scene__text"} -->
<p class="hy-scene__text"><?php echo esc_html( hanayui_kimono_t( 'p3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-scene hy-scene--4", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scene hy-scene--4"><!-- wp:paragraph {"className": "hy-scene__no"} -->
<p class="hy-scene__no">04</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "hy-scene__title"} -->
<h3 class="wp-block-heading hy-scene__title"><?php echo esc_html( hanayui_kimono_t( 'pin4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-scene__text"} -->
<p class="hy-scene__text"><?php echo esc_html( hanayui_kimono_t( 'p4_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className": "hy-scene hy-scene--5", "layout": {"type": "default"}} -->
<div class="wp-block-group hy-scene hy-scene--5"><!-- wp:paragraph {"className": "hy-scene__no"} -->
<p class="hy-scene__no">05</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 3, "className": "hy-scene__title"} -->
<h3 class="wp-block-heading hy-scene__title"><?php echo esc_html( hanayui_kimono_t( 'pin5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-scene__text"} -->
<p class="hy-scene__text"><?php echo esc_html( hanayui_kimono_t( 'p5_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
