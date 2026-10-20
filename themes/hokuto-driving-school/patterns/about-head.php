<?php
/**
 * Title: About: forty years in the old tram depot
 * Slug: hokuto-driving-school/about-head
 * Categories: hokuto-driving-school
 * Keywords: about
 * Viewport Width: 1440
 * Description: The About page opening: title, lead and a wide photograph of the theory room.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head hk-head--photo","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head hk-head--photo"><!-- wp:group {"align":"wide","className":"hk-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head__grid"><!-- wp:group {"className":"hk-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'about_head_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'about_head_02' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'about_head_03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"alignwide hk-head__photo"} -->
<figure class="wp-block-image size-large alignwide hk-head__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/theory-room.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'about_head_04' ) ); ?>"/><figcaption class="wp-element-caption"><?php echo wp_kses_post( hokuto_driving_school_t( 'about_head_05' ) ); ?></figcaption></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
