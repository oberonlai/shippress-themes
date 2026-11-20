<?php
/**
 * Title: Home: tonal title strip with a stacked stage collage
 * Slug: tsukuri-design/front-hero
 * Categories: tsukuri-design
 * Viewport Width: 1440
 * Description: Pale mauve-grey strip with a large title, a short lede and two buttons, a staircase collage of three overlapping photographs (foam model, tool sample, production part) that crosses the seam, and a ruled row of four studio figures.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"td-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull td-hero"><!-- wp:group {"className":"td-hero__head","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__head"><!-- wp:group {"className":"td-hero__txt","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__txt"><!-- wp:paragraph {"className":"td-role"} -->
<p class="td-role"><?php echo esc_html( tsukuri_design_t( 'role' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"td-hero__h"} -->
<h1 class="wp-block-heading td-hero__h"><?php echo esc_html( tsukuri_design_t( 'h1' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__side","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__side"><!-- wp:paragraph {"className":"td-hero__lede"} -->
<p class="td-hero__lede"><?php echo esc_html( tsukuri_design_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"td-hero__btns"} -->
<div class="wp-block-buttons td-hero__btns"><!-- wp:button {"className":"td-btn"} -->
<div class="wp-block-button td-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/start/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'hero_btn_start' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"td-btn td-btn--ghost"} -->
<div class="wp-block-button td-btn td-btn--ghost"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php echo esc_html( tsukuri_design_t( 'hero_btn_work' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__stage"><!-- wp:group {"className":"td-hero__fig td-hero__fig--1","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__fig td-hero__fig--1"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p01-foam-handset.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-hero__tag"} -->
<p class="td-hero__tag"><?php echo esc_html( tsukuri_design_t( 'hero_l1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__fig td-hero__fig--2","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__fig td-hero__fig--2"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p15-first-off.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p15' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-hero__tag"} -->
<p class="td-hero__tag"><?php echo esc_html( tsukuri_design_t( 'hero_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__fig td-hero__fig--3","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__fig td-hero__fig--3"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"td-ph"} -->
<figure class="wp-block-image size-full td-ph"><img src="<?php echo tsukuri_design_img( 'p07-case-a-after.webp' ); ?>" alt="<?php echo tsukuri_design_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"td-hero__tag"} -->
<p class="td-hero__tag"><?php echo esc_html( tsukuri_design_t( 'hero_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-hero__stats","layout":{"type":"default"}} -->
<div class="wp-block-group td-hero__stats"><!-- wp:group {"className":"td-stat","layout":{"type":"default"}} -->
<div class="wp-block-group td-stat"><!-- wp:paragraph {"className":"td-stat__n"} -->
<p class="td-stat__n"><?php echo esc_html( tsukuri_design_t( 'hero_s1_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-stat__l"} -->
<p class="td-stat__l"><?php echo esc_html( tsukuri_design_t( 'hero_s1_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-stat","layout":{"type":"default"}} -->
<div class="wp-block-group td-stat"><!-- wp:paragraph {"className":"td-stat__n"} -->
<p class="td-stat__n"><?php echo esc_html( tsukuri_design_t( 'hero_s2_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-stat__l"} -->
<p class="td-stat__l"><?php echo esc_html( tsukuri_design_t( 'hero_s2_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-stat","layout":{"type":"default"}} -->
<div class="wp-block-group td-stat"><!-- wp:paragraph {"className":"td-stat__n"} -->
<p class="td-stat__n"><?php echo esc_html( tsukuri_design_t( 'hero_s3_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-stat__l"} -->
<p class="td-stat__l"><?php echo esc_html( tsukuri_design_t( 'hero_s3_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"td-stat","layout":{"type":"default"}} -->
<div class="wp-block-group td-stat"><!-- wp:paragraph {"className":"td-stat__n"} -->
<p class="td-stat__n"><?php echo esc_html( tsukuri_design_t( 'hero_s4_n' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"td-stat__l"} -->
<p class="td-stat__l"><?php echo esc_html( tsukuri_design_t( 'hero_s4_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
