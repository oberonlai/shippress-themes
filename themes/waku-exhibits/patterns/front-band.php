<?php
/**
 * Title: Home: hall photo band
 * Slug: waku-exhibits/front-band
 * Categories: waku-exhibits
 * Keywords: exhibition, stand, quote, landing
 * Viewport Width: 1440
 * Description: Full-bleed hall photograph on a slow parallax with one white line lower left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-hall.webp' ) ); ?>","alt":"<?php echo esc_attr( wk_t( 'alt_p08' ) ); ?>","dimRatio":20,"overlayColor":"ink","isDark":true,"align":"full","className":"wk-band sp-parallax"} -->
<div class="wp-block-cover alignfull wk-band sp-parallax"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( wk_t( 'alt_p08' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p08-hall.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":2,"className":"wk-band__h"} -->
<h2 class="wp-block-heading wk-band__h"><?php echo esc_html( wk_t( 'band_h' ) ); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->
