<?php
/**
 * Title: Home: seasoning parallax band
 * Slug: kama-cookware/home-parallax
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Full-bleed shop interior that drifts against fixed text.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/P20.webp' ) ); ?>","dimRatio":30,"customOverlayColor":"#141b1b","minHeight":80,"minHeightUnit":"vh","contentPosition":"center left","align":"full","className":"km-cover sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left km-cover sp-parallax" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#141b1b"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kama_cookware_t( 'alt_p20' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/P20.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"km-cover__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-cover__text"><!-- wp:paragraph {"className":"km-label km-label--w"} -->
<p class="km-label km-label--w"><?php echo esc_html( kama_cookware_t( 'pl_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-h2 km-h2--w"} -->
<h2 class="wp-block-heading km-h2 km-h2--w"><?php echo esc_html( kama_cookware_t( 'pl_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"km-lead km-lead--w"} -->
<p class="km-lead km-lead--w"><?php echo esc_html( kama_cookware_t( 'pl_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pill km-pill--light-wrap"} -->
<div class="wp-block-buttons km-pill km-pill--light-wrap"><!-- wp:button {"className":"km-pill km-pill--light"} -->
<div class="wp-block-button km-pill km-pill--light"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/seasoning-care/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'pl_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
