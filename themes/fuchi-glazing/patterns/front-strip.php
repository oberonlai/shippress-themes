<?php
/**
 * Title: Home: parallax photo strip
 * Slug: fuchi-glazing/front-strip
 * Categories: fuchi-glazing
 * Inserter: no
 * Viewport Width: 1440
 * Description: Edge-to-edge 4.67:1 photograph with a centred white caption; the photograph drifts slowly, the caption stays.
 */
?>
<!-- wp:cover {"url":"<?php echo fuchi_glazing_img( 'strip-street.webp' ); ?>","alt":"<?php echo fuchi_glazing_a( 'alt_p11' ); ?>","dimRatio":30,"customOverlayColor":"#1A1C1E","align":"full","className":"fg-strip sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull fg-strip sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#1A1C1E"></span><img class="wp-block-cover__image-background" alt="<?php echo fuchi_glazing_a( 'alt_p11' ); ?>" src="<?php echo fuchi_glazing_img( 'strip-street.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"textAlign":"center","level":2,"className":"fg-strip__h"} -->
<h2 class="wp-block-heading has-text-align-center fg-strip__h"><?php echo esc_html( fuchi_glazing_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"fg-strip__p","align":"center"} -->
<p class="has-text-align-center fg-strip__p"><?php echo esc_html( fuchi_glazing_t( 'st_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
