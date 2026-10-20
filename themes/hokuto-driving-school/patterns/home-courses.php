<?php
/**
 * Title: Home: courses and fees (plain prices beside a photograph)
 * Slug: hokuto-driving-school/home-courses
 * Categories: hokuto-driving-school
 * Keywords: courses, fees, prices
 * Viewport Width: 1440
 * Description: How lessons work and four plain prices as a ruled list, beside a photograph of a lesson in progress.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-split hk-split--flip hk-split--top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split hk-split--flip hk-split--top"><!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'courses_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_01' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-ruled hk-prices"} -->
<ul class="wp-block-list is-style-ruled hk-prices"><!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_03' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_04' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_05' ) ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_06' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/courses/"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--wide"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--wide"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/instructor-seat.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'courses_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_courses_08' ) ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
