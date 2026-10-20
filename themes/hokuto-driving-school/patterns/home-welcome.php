<?php
/**
 * Title: Home: a family school (letter and yard photograph)
 * Slug: hokuto-driving-school/home-welcome
 * Categories: hokuto-driving-school
 * Keywords: about, story, welcome
 * Viewport Width: 1440
 * Description: Who teaches here and why: two narrative paragraphs from the owner beside a photograph of the practice yard.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--tall"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--tall"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yard.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'home_welcome_01' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_02' ) ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_04' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_05' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_06' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-sign"} -->
<p class="hk-sign"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_welcome_07' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
