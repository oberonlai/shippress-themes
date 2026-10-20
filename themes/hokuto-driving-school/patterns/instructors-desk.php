<?php
/**
 * Title: Instructors: Joan at the booking desk
 * Slug: hokuto-driving-school/instructors-desk
 * Categories: hokuto-driving-school
 * Keywords: booking, office
 * Viewport Width: 1440
 * Description: A dark band about the booking desk with a photograph of the office.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-band hk-band--slate hk-section--last-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-band hk-band--slate hk-section--last-band"><!-- wp:group {"align":"wide","className":"hk-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"hk-split__photo hk-split__photo--land"} -->
<figure class="wp-block-image size-large hk-split__photo hk-split__photo--land"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/booking-office.webp' ) ); ?>" alt="<?php echo esc_attr( hokuto_driving_school_t( 'instructors_desk_01' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"hk-split__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-split__text"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'instructors_desk_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"hk-split__title"} -->
<h2 class="wp-block-heading hk-split__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'instructors_desk_03' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'instructors_desk_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hokuto_driving_school_t( 'instructors_desk_05' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
