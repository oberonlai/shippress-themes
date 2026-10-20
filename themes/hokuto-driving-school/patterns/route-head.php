<?php
/**
 * Title: The route: from the yard to test day
 * Slug: hokuto-driving-school/route-head
 * Categories: hokuto-driving-school
 * Keywords: route
 * Viewport Width: 1440
 * Description: The Route page opening: title and lead, then a wide photograph of the practice yard.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head hk-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head hk-head--photo"><!-- wp:group {"align":"wide","className":"hk-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head__grid"><!-- wp:group {"className":"hk-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'home_route_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'route_head_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'route_head_02' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide hk-head__photo"} -->
<figure class="wp-block-image size-large alignwide hk-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yard.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'route_head_03' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hokuto_driving_school_t( 'route_head_04' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
