<?php
/**
 * Title: Home: headline and a day line
 * Slug: hidamari-care/hero-day-line
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: White first screen: headline, one sentence and a text link top left, then one edge-to-edge celadon day line with five time marks; at each mark a small stacked photo collage (photo card over an offset celadon card) alternating above and below the line.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-day","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-day"><!-- wp:group {"className":"hc-day__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hc-day__copy"><!-- wp:heading {"level":1,"className":"hc-day__title"} -->
<h1 class="wp-block-heading hc-day__title"><?php echo esc_html( hidamari_care_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-day__lead"} -->
<p class="hc-day__lead"><?php echo esc_html( hidamari_care_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-day__cta"} -->
<p class="hc-day__cta"><a class="hc-day__link" href="/visit/"><?php echo esc_html( hidamari_care_t( 'book' ) ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-day__label hc-tate"} -->
<p class="hc-day__label hc-tate"><?php echo esc_html( hidamari_care_t( 'day_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-day__line","layout":{"type":"default"}} -->
<div class="wp-block-group hc-day__line"><!-- wp:group {"className":"hc-vig hc-vig--up hc-vig--1","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig hc-vig--up hc-vig--1"><!-- wp:paragraph {"className":"hc-vig__time"} -->
<p class="hc-vig__time">7:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-vig__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__body"><!-- wp:group {"className":"hc-vig__stack","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__stack"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-vig__photo"} -->
<figure class="wp-block-image size-full hc-vig__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/breakfast.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_breakfast' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-vig__cap"} -->
<p class="hc-vig__cap"><?php echo esc_html( hidamari_care_t( 'v1_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-vig hc-vig--down hc-vig--2","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig hc-vig--down hc-vig--2"><!-- wp:paragraph {"className":"hc-vig__time"} -->
<p class="hc-vig__time">10:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-vig__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__body"><!-- wp:group {"className":"hc-vig__stack","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__stack"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-vig__photo"} -->
<figure class="wp-block-image size-full hc-vig__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_garden' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-vig__cap"} -->
<p class="hc-vig__cap"><?php echo esc_html( hidamari_care_t( 'v2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-vig hc-vig--up hc-vig--3","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig hc-vig--up hc-vig--3"><!-- wp:paragraph {"className":"hc-vig__time"} -->
<p class="hc-vig__time">12:30</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-vig__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__body"><!-- wp:group {"className":"hc-vig__stack","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__stack"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-vig__photo"} -->
<figure class="wp-block-image size-full hc-vig__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/lunch.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_lunch' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-vig__cap"} -->
<p class="hc-vig__cap"><?php echo esc_html( hidamari_care_t( 'v3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-vig hc-vig--down hc-vig--4","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig hc-vig--down hc-vig--4"><!-- wp:paragraph {"className":"hc-vig__time"} -->
<p class="hc-vig__time">15:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-vig__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__body"><!-- wp:group {"className":"hc-vig__stack","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__stack"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-vig__photo"} -->
<figure class="wp-block-image size-full hc-vig__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tea.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_tea' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-vig__cap"} -->
<p class="hc-vig__cap"><?php echo esc_html( hidamari_care_t( 'v4_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-vig hc-vig--up hc-vig--5","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig hc-vig--up hc-vig--5"><!-- wp:paragraph {"className":"hc-vig__time"} -->
<p class="hc-vig__time">19:00</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hc-vig__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__body"><!-- wp:group {"className":"hc-vig__stack","layout":{"type":"default"}} -->
<div class="wp-block-group hc-vig__stack"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-vig__photo"} -->
<figure class="wp-block-image size-full hc-vig__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/evening.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_evening' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-vig__cap"} -->
<p class="hc-vig__cap"><?php echo esc_html( hidamari_care_t( 'v5_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
