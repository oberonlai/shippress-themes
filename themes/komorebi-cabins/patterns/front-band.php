<?php
/**
 * Title: Home: woodland band
 * Slug: komorebi-cabins/front-band
 * Categories: komorebi-cabins
 * Viewport Width: 1440
 * Description: Full-bleed forest-floor photograph with a bracketed time line and one statement.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/forest-floor.webp' ) ); ?>","dimRatio":30,"overlayColor":"forest","isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","contentPosition":"bottom center","isDark":true,"align":"full","className":"kc-band sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center kc-band sp-parallax" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-forest-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( komorebi_cabins_t( 'a382de88f' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/forest-floor.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"kc-band__bracket"} -->
<p class="kc-band__bracket"><?php echo wp_kses_post( komorebi_cabins_t( 'k8e79ca0a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kc-band__line"} -->
<p class="kc-band__line"><?php echo wp_kses_post( komorebi_cabins_t( 'k9f6ac720' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
