<?php
/**
 * Title: Home: for nervous drivers (dark band)
 * Slug: hokuto-driving-school/home-nervous
 * Categories: hokuto-driving-school
 * Keywords: nervous, anxious, confidence
 * Viewport Width: 1440
 * Description: A deep slate band with a wide photograph of the moor road, a paragraph about first lessons for nervous drivers and one learner's words.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-band hk-band--slate","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-band hk-band--slate"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--land"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/moor-road.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'home_nervous_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_05' ) ); ?></p>
<!-- /wp:paragraph --><cite><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_06' ) ); ?></cite></blockquote>
<!-- /wp:quote -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/nervous-drivers/"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_nervous_07' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
