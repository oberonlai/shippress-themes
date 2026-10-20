<?php
/**
 * Title: Home: teachers by name
 * Slug: aozora-primary-school/front-teachers
 * Categories: aozora-primary-school
 * Keywords: home, school, primary
 * Viewport Width: 1440
 * Description: Three teachers as ruled index rows: an oval portrait, the name and class, and one sentence in their own words.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-teach","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ap-teach"><!-- wp:group {"className":"ap-teach__in","layout":{"type":"default"}} -->
<div class="wp-block-group ap-teach__in"><!-- wp:group {"className":"ap-teach__head","layout":{"type":"default"}} -->
<div class="wp-block-group ap-teach__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ap-teach__title"} -->
<h2 class="wp-block-heading ap-teach__title"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-teach__lead"} -->
<p class="ap-teach__lead"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/teachers/"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_04' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-tutors","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutors"><!-- wp:group {"className":"ap-tutor","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-tutor__photo"} -->
<figure class="wp-block-image size-large ap-tutor__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-2.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_t_1_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ap-tutor__who","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor__who"><!-- wp:heading {"level":3,"className":"ap-tutor__name"} -->
<h3 class="wp-block-heading ap-tutor__name"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_1_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-tutor__role"} -->
<p class="ap-tutor__role"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_1_role' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ap-tutor__quote"} -->
<p class="ap-tutor__quote"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_1_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-tutor","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-tutor__photo"} -->
<figure class="wp-block-image size-large ap-tutor__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-3.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_t_2_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ap-tutor__who","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor__who"><!-- wp:heading {"level":3,"className":"ap-tutor__name"} -->
<h3 class="wp-block-heading ap-tutor__name"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_2_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-tutor__role"} -->
<p class="ap-tutor__role"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_2_role' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ap-tutor__quote"} -->
<p class="ap-tutor__quote"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_2_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-tutor","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"ap-tutor__photo"} -->
<figure class="wp-block-image size-large ap-tutor__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/teacher-4.webp' ) ); ?>" alt="<?php echo esc_attr( aozora_primary_school_t( 'front_t_3_alt' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ap-tutor__who","layout":{"type":"default"}} -->
<div class="wp-block-group ap-tutor__who"><!-- wp:heading {"level":3,"className":"ap-tutor__name"} -->
<h3 class="wp-block-heading ap-tutor__name"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_3_name' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ap-tutor__role"} -->
<p class="ap-tutor__role"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_3_role' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ap-tutor__quote"} -->
<p class="ap-tutor__quote"><?php echo wp_kses_post( aozora_primary_school_t( 'front_t_3_quote' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
