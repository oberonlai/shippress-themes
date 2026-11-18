<?php
/**
 * Title: Home: parallax band
 * Slug: taruki-distillery/front-band
 * Categories: taruki-distillery
 * Viewport Width: 1440
 * Description: A full-bleed photograph with slow parallax, two light lines on a charcoal veil, and a 20px charcoal rule underneath.
 */
?>
<!-- wp:cover {"url":"<?php echo taruki_img( 'img-03.webp' ); ?>","dimRatio":0,"align":"full","className":"sp-parallax td-band","contentPosition":"center center"} -->
<div class="wp-block-cover alignfull is-light sp-parallax td-band"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo taruki_a( 'alt_03' ); ?>" src="<?php echo taruki_img( 'img-03.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"td-veil","layout":{"type":"constrained"}} -->
<div class="wp-block-group td-veil"><!-- wp:heading {"textAlign":"center","className":"td-band__h sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading has-text-align-center td-band__h sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'band_l1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"td-band__p sp-reveal sp-reveal--up"} -->
<p class="has-text-align-center td-band__p sp-reveal sp-reveal--up"><?php echo esc_html( taruki_t( 'band_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
