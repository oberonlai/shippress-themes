<?php
/**
 * Title: Parallax band
 * Slug: sanroku-trail/parallax-band
 * Categories: sanroku-trail
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the valley with a two-line quote bottom-left.
 */
?>
<!-- wp:cover {"url":"<?php echo sanroku_trail_img( 'p09-valley-cloud.webp' ); ?>","alt":"<?php echo sanroku_trail_a( 'alt_p09' ); ?>","dimRatio":30,"customOverlayColor":"#1d1d1f","minHeight":560,"minHeightUnit":"px","tagName":"section","className":"st-pband sp-parallax"} -->
<section class="wp-block-cover st-pband sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#1d1d1f"></span><img class="wp-block-cover__image-background" alt="<?php echo sanroku_trail_a( 'alt_p09' ); ?>" src="<?php echo sanroku_trail_img( 'p09-valley-cloud.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"st-pband__q"} -->
<p class="st-pband__q"><?php echo esc_html( sanroku_trail_t( 'band_q_a' ) ); ?><br><?php echo esc_html( sanroku_trail_t( 'band_q_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"st-pband__by"} -->
<p class="st-pband__by"><?php echo esc_html( sanroku_trail_t( 'band_by' ) ); ?></p>
<!-- /wp:paragraph --></div></section>
<!-- /wp:cover -->
