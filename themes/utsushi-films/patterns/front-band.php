<?php
/**
 * Title: Home: parallax harbour band
 * Slug: utsushi-films/front-band
 * Categories: utsushi-films
 * Viewport Width: 1440
 * Description: Full-bleed harbour photograph with a slow parallax and one line of text.
 */
?>
<!-- wp:cover {"alt":"<?php echo esc_html( substr( strtr( wp_json_encode( utsushi_films_t( 'a5697849b' ) ), array( '<' => '\\u003c', '>' => '\\u003e', '&' => '\\u0026', '--' => '\\u002d\\u002d' ) ), 1, -1 ) ); ?>","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour-band.webp' ) ); ?>","dimRatio":35,"customOverlayColor":"#222222","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","align":"full","className":"uf-band sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull uf-band sp-parallax" style="min-height:600px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( utsushi_films_t( 'a5697849b' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/harbour-band.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#222222"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"uf-band__line"} -->
<h2 class="wp-block-heading has-text-align-center uf-band__line"><?php echo wp_kses_post( utsushi_films_t( 'k2f122a76' ) ); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->
