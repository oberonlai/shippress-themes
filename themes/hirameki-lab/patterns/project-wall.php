<?php
/**
 * Title: Home: project wall
 * Slug: hirameki-lab/project-wall
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Description: Filter chips above twelve student projects in an even four-column mosaic: cut-out object on a kouji tile, title and age per card.
 */
?>
<!-- wp:group {"tagName":"section","className":"hl-wall","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hl-wall"><!-- wp:paragraph {"className":"hl-eyebrow"} -->
<p class="hl-eyebrow"><?php echo esc_html( hirameki_lab_t( 'wall_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hl-sec__title"} -->
<h2 class="wp-block-heading hl-sec__title"><?php echo esc_html( hirameki_lab_t( 'wall_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"hl-chips","layout":{"type":"default"}} -->
<div class="wp-block-group hl-chips"><!-- wp:paragraph {"className":"hl-chip is-on"} -->
<p class="hl-chip is-on"><?php echo esc_html( hirameki_lab_t( 'chip_all' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-chip"} -->
<p class="hl-chip"><?php echo esc_html( hirameki_lab_t( 'chip1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-chip"} -->
<p class="hl-chip"><?php echo esc_html( hirameki_lab_t( 'chip2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-chip"} -->
<p class="hl-chip"><?php echo esc_html( hirameki_lab_t( 'chip3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-chip"} -->
<p class="hl-chip"><?php echo esc_html( hirameki_lab_t( 'chip4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-wall__grid","layout":{"type":"default"}} -->
<div class="wp-block-group hl-wall__grid"><!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--1","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--1"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
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

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--2","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--2"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
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

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--3","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--3"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
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

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--4","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--4"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
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

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--5","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--5"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
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
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--1","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--1"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arm-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_arm' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w6_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w6_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--2","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--2"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w7_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w7_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--3","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--3"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/sensor-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_sensor' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w8_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w8_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--4","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--4"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/car-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_car' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w9_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w9_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--5","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--5"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rocket-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_rocket' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w10_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w10_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--1","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--1"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/arm-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_arm' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w11_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w11_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hl-pcard hl-pcard--wall hl-pcard--2","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard hl-pcard--wall hl-pcard--2"><!-- wp:group {"className":"hl-pcard__tile","layout":{"type":"default"}} -->
<div class="wp-block-group hl-pcard__tile"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hl-pcard__obj"} -->
<figure class="wp-block-image size-full hl-pcard__obj"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/bridge-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hirameki_lab_t( 'alt_bridge' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hl-pcard__title"} -->
<p class="hl-pcard__title"><?php echo esc_html( hirameki_lab_t( 'w12_t' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hl-pcard__age"} -->
<p class="hl-pcard__age"><?php echo esc_html( hirameki_lab_t( 'w12_a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
