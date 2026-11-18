<?php
/**
 * Title: Lit truss band
 * Slug: moyooshi-productions/band
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Full-bleed dark teal band with the finished, lit truss behind a three-line white statement; parallax.
 */
?>
<!-- wp:cover {"url":"<?php echo moyooshi_productions_img( 'truss-lit.webp' ); ?>","alt":"<?php echo moyooshi_productions_a( 'alt_p03' ); ?>","dimRatio":72,"customOverlayColor":"#0b3a42","minHeight":560,"minHeightUnit":"px","tagName":"section","className":"mp-band sp-parallax"} -->
<section class="wp-block-cover mp-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#0b3a42"></span><img class="wp-block-cover__image-background" alt="<?php echo moyooshi_productions_a( 'alt_p03' ); ?>" src="<?php echo moyooshi_productions_img( 'truss-lit.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"mp-label mp-label--lt"} -->
<p class="mp-label mp-label--lt"><?php echo esc_html( moyooshi_productions_t( 'lbl_show' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"mp-band__h"} -->
<h2 class="wp-block-heading mp-band__h"><?php echo esc_html( moyooshi_productions_t( 'band_h1' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'band_h2' ) ); ?><br><?php echo esc_html( moyooshi_productions_t( 'band_h3' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-band__p"} -->
<p class="mp-band__p"><?php echo esc_html( moyooshi_productions_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph --></div></section>
<!-- /wp:cover -->
