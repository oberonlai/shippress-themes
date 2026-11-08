<?php
/**
 * Title: Home: request a survey hour
 * Slug: kuki-climate/front-request
 * Categories: kuki-climate
 * Keywords: cta, request, contact, parallax
 * Viewport Width: 1440
 * Description: A full-bleed rooftop photograph under an iron veil, centred title and the single button that requests a survey hour.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-rooftop-row.webp' ) ); ?>","dimRatio":80,"overlayColor":"iron","minHeight":640,"minHeightUnit":"px","contentPosition":"center center","align":"full","anchor":"request","className":"kc-request sp-parallax"} -->
<div id="request" class="wp-block-cover alignfull kc-request sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-iron-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'adf6f3e12' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p15-rooftop-row.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":2,"className":"kc-request__h"} -->
<h2 class="wp-block-heading has-text-align-center kc-request__h"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"kc-request__sub"} -->
<p class="has-text-align-center kc-request__sub"><?php echo wp_kses_post( kuki_climate_t( 'k80670f65' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"kc-request__btn"} -->
<div class="wp-block-button kc-request__btn"><a class="wp-block-button__link wp-element-button" href="mailto:survey@kukiclimate.example?subject=Survey%20hour"><?php echo wp_kses_post( kuki_climate_t( 'k9295f502' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","className":"kc-request__tel"} -->
<p class="has-text-align-center kc-request__tel"><?php echo wp_kses_post( kuki_climate_t( 'k11d41b21' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
