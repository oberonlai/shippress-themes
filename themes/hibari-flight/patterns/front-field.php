<?php
/**
 * Title: Home: airfield cover
 * Slug: hibari-flight/front-field
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Description: Full-bleed airfield photo with a slow parallax and white text at the bottom left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/h13.webp' ) ); ?>","dimRatio":0,"minHeight":78,"minHeightUnit":"vh","align":"full","className":"hf-field sp-parallax","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull hf-field sp-parallax" style="padding-top:0;padding-bottom:0;min-height:78vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( hibari_flight_t( 'a19c69839' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/h13.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"hf-field__copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hf-field__copy"><!-- wp:paragraph {"className":"hf-label hf-label--white"} -->
<p class="hf-label hf-label--white"><?php echo wp_kses_post( hibari_flight_t( 'k599eea71' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"hf-field__h"} -->
<h2 class="wp-block-heading hf-field__h"><?php echo wp_kses_post( hibari_flight_t( 'keda8f64b' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hf-field__text"} -->
<p class="hf-field__text"><?php echo wp_kses_post( hibari_flight_t( 'k0e222bc4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"hf-tlink hf-tlink--white"} -->
<p class="hf-tlink hf-tlink--white"><a href="/the-field/"><?php echo wp_kses_post( hibari_flight_t( 'kd9c60ea8' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
