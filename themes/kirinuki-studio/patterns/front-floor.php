<?php
/**
 * Title: Home: studio floor band
 * Slug: kirinuki-studio/front-floor
 * Categories: kirinuki-studio
 * Viewport Width: 1440
 * Description: Full-width studio floor photograph that drifts with scroll, with a white address card at the lower left.
 */
?>
<!-- wp:cover {"url":"<?php echo kirinuki_studio_img( 'b1.webp' ); ?>","dimRatio":0,"minHeight":620,"minHeightUnit":"px","contentPosition":"bottom left","isUserOverlayColor":false,"className":"kr-floor sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left kr-floor sp-parallax" style="min-height:620px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo kirinuki_studio_a( 'alt_b1' ); ?>" src="<?php echo kirinuki_studio_img( 'b1.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kr-floor__card","layout":{"type":"default"}} -->
<div class="wp-block-group kr-floor__card"><!-- wp:heading {"level":3,"className":"kr-floor__h"} -->
<h3 class="wp-block-heading kr-floor__h"><?php echo esc_html( kirinuki_studio_t( 'floor_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_hours' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kr-floor__p"} -->
<p class="kr-floor__p"><?php echo esc_html( kirinuki_studio_t( 'floor_dock' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
