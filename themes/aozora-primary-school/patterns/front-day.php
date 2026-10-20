<?php
/**
 * Title: Home: a school day in photographs
 * Slug: aozora-primary-school/front-day
 * Categories: aozora-primary-school
 * Keywords: home, school, primary
 * Viewport Width: 1440
 * Description: Six photographs of the day in a horizontal strip of rounded frames, each with a time, a title and a line.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-day","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-day"><!-- wp:group {"className":"ap-day__in","layout":{"type":"default"}} -->
<div class="wp-block-group ap-day__in"><!-- wp:group {"className":"ap-day__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-day__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ap-day__title"} -->
<h2 class="wp-block-heading ap-day__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-day__lead"} -->
<p class="ap-day__lead"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ap-strip"><!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-arrival.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_1_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_1_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_1_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_1_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-reading.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_2_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_2_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_2_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_2_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-maths.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_3_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_3_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_3_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_3_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-lunch.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_4_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_4_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_4_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_4_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/garden.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_5_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_5_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_5_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_5_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-frame","layout":{"type":"default"}} -->
<div class="wp-block-group ap-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-frame__photo"} -->
<figure class="wp-block-image size-large ap-frame__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/day-music.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_day_6_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ap-frame__time"} -->
<p class="ap-frame__time"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_6_time' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ap-frame__title"} -->
<h3 class="wp-block-heading ap-frame__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_6_title' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-frame__text"} -->
<p class="ap-frame__text"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_6_text' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/a-school-day/"><?php echo wp_kses_post( aozora_primary_school_t( 'front_day_04' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
