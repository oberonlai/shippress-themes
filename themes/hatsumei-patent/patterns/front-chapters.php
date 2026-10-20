<?php
/**
 * Title: Home: from idea to patent in six photographed chapters
 * Slug: hatsumei-patent/front-chapters
 * Categories: hatsumei-patent
 * Keywords: process, chapters, filing, examination
 * Viewport Width: 1440
 * Description: A heading and lead, then six photographed chapters on an uneven two-column shelf: chamfered photographs of different sizes, the right column set lower, each with a bracketed numeral on its lower corner, a name and a sentence.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-route","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hp-route"><!-- wp:group {"className":"hp-route__head","layout":{"type":"default"}} -->
<div class="wp-block-group hp-route__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-route__lead"} -->
<p class="hp-route__lead"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hp-route__btns"} -->
<div class="wp-block-buttons hp-route__btns"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/from-idea-to-patent/"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf"><!-- wp:group {"className":"hp-shelf__item hp-shelf__item--1","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--1"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--d"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--d"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/first-idea.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img1' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t1' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf__item hp-shelf__item--2","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--2"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--e"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--e"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/search-desk.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img2' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t2' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf__item hp-shelf__item--3","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--3"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--f"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--f"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/drawings-review.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img3' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t3' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf__item hp-shelf__item--4","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--4"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--g"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--g"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/filing.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img4' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t4' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf__item hp-shelf__item--5","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--5"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--h"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--h"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/examination.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img5' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t5' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-shelf__item hp-shelf__item--6","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__item hp-shelf__item--6"><!-- wp:group {"className":"hp-shelf__media","layout":{"type":"default"}} -->
<div class="wp-block-group hp-shelf__media"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hp-shelf__photo hp-cut hp-cut--i"} -->
<figure class="wp-block-image size-full hp-shelf__photo hp-cut hp-cut--i"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/granted.webp' ) ); ?>" alt="<?php echo esc_attr( hatsumei_patent_t( 'front_ch_img6' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"hp-shelf__num"} -->
<p class="hp-shelf__num"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_n6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"hp-shelf__name"} -->
<h3 class="wp-block-heading hp-shelf__name"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_t6' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hp-shelf__text"} -->
<p class="hp-shelf__text"><?php echo wp_kses_post( hatsumei_patent_t( 'front_ch_d6' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
