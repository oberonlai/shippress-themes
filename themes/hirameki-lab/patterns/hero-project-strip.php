<?php
/**
 * Title: Home: headline and a right-bleeding strip of five project cards
 * Slug: hirameki-lab/hero-project-strip
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: One-line headline across the grid with a text CTA on its baseline, then a horizontal scroll strip of five student-project cards bleeding off the right edge; each pale kouji tile holds a transparent cut-out object that breaks over the tile top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"hl-top","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-top"><!-- wp:group {"className":"hl-top__top","layout":{"type":"default"}} -->
<div class="wp-block-group hl-top__top"><!-- wp:heading {"level":1,"className":"hl-top__title"} -->
<h1 class="wp-block-heading hl-top__title"><?php echo esc_html( hirameki_lab_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hl-top__lead"} -->
<p class="hl-top__lead"><?php echo esc_html( hirameki_lab_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-top__cta"} -->
<p class="hl-top__cta"><a href="/trial/"><?php echo esc_html( hirameki_lab_t( 'book' ) ); ?> &rarr;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pstrip","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pstrip"><!-- wp:group {"className":"hl-pcard hl-pcard--1","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--1"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arm-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_arm' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w1_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w1_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--2","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--2"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w2_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w2_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--3","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--3"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sensor-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_sensor' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w3_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w3_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--4","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--4"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/car-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_car' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w4_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w4_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--5","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--5"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rocket-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_rocket' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w5_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w5_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-progress","layout":{"type":"default"}} -->
<div class="wp-block-group hl-progress"><!-- wp:paragraph {"className":"hl-progress__n"} -->
<p class="hl-progress__n">01 / 12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-progress__hint"} -->
<p class="hl-progress__hint"><?php echo esc_html( hirameki_lab_t( 'strip_hint' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
