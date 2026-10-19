<?php
/**
 * Title: Home: three paths in
 * Slug: waza-college/hero-three-paths
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Description: White first screen: a centred one-line headline and subline with an open-day link at the top right, over three equal framed panels (from high school, changing career, for employers), each with a transparent cut-out object breaking out of the frame top edge.
 */
?>
<!-- wp:group {"tagName":"section","className":"wz-gate","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull wz-gate"><!-- wp:html -->
<a class="wz-gate__od" href="#open-days"><?php echo esc_html( waza_college_t( 'hero_od' ) ); ?> <span aria-hidden="true">&rarr;</span></a>
<!-- /wp:html -->

<!-- wp:heading {"level":1,"className":"wz-gate__title"} -->
<h1 class="wp-block-heading wz-gate__title"><?php echo esc_html( waza_college_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"wz-gate__sub"} -->
<p class="wz-gate__sub"><?php echo esc_html( waza_college_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="wz-gate__row"><article class="wz-gate__panel wz-gate__panel--1"><img class="wz-gate__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/toolbox-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_toolbox' ) ); ?>" loading="eager"/><p class="wz-gate__label"><span class="wz-gate__no">01</span> <?php echo esc_html( waza_college_t( 'g1_l' ) ); ?></p><p class="wz-gate__copy"><?php echo esc_html( waza_college_t( 'g1_d' ) ); ?></p><a class="wz-gate__link" href="/courses/"><?php echo esc_html( waza_college_t( 'g1_a' ) ); ?> <span aria-hidden="true">&rarr;</span></a></article><article class="wz-gate__panel wz-gate__panel--2"><img class="wz-gate__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/laptop-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_laptop' ) ); ?>" loading="eager"/><p class="wz-gate__label"><span class="wz-gate__no">02</span> <?php echo esc_html( waza_college_t( 'g2_l' ) ); ?></p><p class="wz-gate__copy"><?php echo esc_html( waza_college_t( 'g2_d' ) ); ?></p><a class="wz-gate__link" href="/apply/"><?php echo esc_html( waza_college_t( 'g2_a' ) ); ?> <span aria-hidden="true">&rarr;</span></a></article><article class="wz-gate__panel wz-gate__panel--3"><img class="wz-gate__obj" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/helmet-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( waza_college_t( 'alt_helmet' ) ); ?>" loading="eager"/><p class="wz-gate__label"><span class="wz-gate__no">03</span> <?php echo esc_html( waza_college_t( 'g3_l' ) ); ?></p><p class="wz-gate__copy"><?php echo esc_html( waza_college_t( 'g3_d' ) ); ?></p><a class="wz-gate__link" href="/about/"><?php echo esc_html( waza_college_t( 'g3_a' ) ); ?> <span aria-hidden="true">&rarr;</span></a></article></div>
<!-- /wp:html --></section>
<!-- /wp:group -->
