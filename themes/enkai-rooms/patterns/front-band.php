<?php
/**
 * Title: Home: parallax band
 * Slug: enkai-rooms/front-band
 * Categories: enkai-rooms
 * Keywords: band, parallax, photo
 * Viewport Width: 1440
 * Description: A full-bleed photograph of a long table mid-dinner that drifts slowly as you scroll, with a centred caption on a dark scrim.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-mid-dinner.webp' ) ); ?>","dimRatio":45,"overlayColor":"dark","isDark":true,"align":"full","className":"er-pband sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-dark er-pband sp-parallax"><img class="wp-block-cover__image-background" alt="Guests dining along the long oak banquet table with candles lit during the evening." src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-mid-dinner.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"er-cap er-cap--band","layout":{"type":"default"}} -->
<div class="wp-block-group er-cap er-cap--band"><!-- wp:paragraph {"className":"er-cap__1"} -->
<p class="er-cap__1">Evenings we remember</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"er-cap__2"} -->
<p class="er-cap__2"><em>Three tables from the last year, told by the people who set them.</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
