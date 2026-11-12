<?php
/**
 * Title: Home: evening band (parallax)
 * Slug: tochi-academy/front-band
 * Categories: tochi-academy
 * Keywords: parallax, cover, evening, classroom
 * Viewport Width: 1440
 * Description: Full-bleed evening classroom photograph that drifts slowly behind a still, bordered white card.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/P10.webp' ) ); ?>","dimRatio":0,"minHeight":72,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"ta-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left ta-band sp-parallax" style="min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( tochi_academy_t( 'ae5071762' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P10.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ta-bandcard","layout":{"type":"default"}} -->
<div class="wp-block-group ta-bandcard"><!-- wp:paragraph {"className":"ta-vdate"} -->
<p class="ta-vdate"><?php echo wp_kses_post( tochi_academy_t( 'k878bd439' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ta-cat"} -->
<p class="ta-cat"><?php echo wp_kses_post( tochi_academy_t( 'k333a5622' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"ta-bandcard__title"} -->
<h3 class="wp-block-heading ta-bandcard__title"><?php echo wp_kses_post( tochi_academy_t( 'k0d9bef43' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k17384317' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
