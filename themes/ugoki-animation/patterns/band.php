<?php
/**
 * Title: Home: parallax band
 * Slug: ugoki-animation/band
 * Categories: ugoki-animation
 * Viewport Width: 1440
 * Description: Full-bleed dusk photograph with a parallax background and one statement.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/band-light-tables.webp' ) ); ?>","alt":"<?php echo esc_attr( ugoki_animation_t( 'alt_p12' ) ); ?>","dimRatio":30,"minHeight":680,"minHeightUnit":"px","align":"full","className":"ug-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull ug-band sp-parallax" style="min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( ugoki_animation_t( 'alt_p12' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-light-tables.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ug-wrap ug-band__in","layout":{"type":"default"}} -->
<div class="wp-block-group ug-wrap ug-band__in"><!-- wp:heading {"level":2,"className":"ug-band__h"} -->
<h2 class="wp-block-heading ug-band__h"><?php echo esc_html( ugoki_animation_t( 'band_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ug-band__cap"} -->
<p class="ug-band__cap"><?php echo esc_html( ugoki_animation_t( 'band_cap' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
