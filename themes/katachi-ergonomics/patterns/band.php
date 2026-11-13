<?php
/**
 * Title: Home: parallax band
 * Slug: katachi-ergonomics/band
 * Categories: katachi-ergonomics
 * Keywords: ergonomics, workplace, desk, consultancy
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the office floor with one wide-tracked line.
 */
?>
<!-- wp:cover {"url":"<?php echo katachi_ergonomics_img( 'floor-wide.webp' ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","contentPosition":"center left","align":"full","className":"ke-band sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left ke-band sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( katachi_ergonomics_t( 'alt_r01' ) ); ?>" src="<?php echo katachi_ergonomics_img( 'floor-wide.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":2,"className":"ke-band__line"} -->
<h2 class="wp-block-heading ke-band__line"><?php echo esc_html( katachi_ergonomics_t( 'band_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ke-band__p"} -->
<p class="ke-band__p"><?php echo esc_html( katachi_ergonomics_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
