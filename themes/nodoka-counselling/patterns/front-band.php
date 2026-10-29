<?php
/**
 * Title: Home: full-bleed pause
 * Slug: nodoka-counselling/front-band
 * Categories: nodoka-counselling
 * Keywords: counselling, therapy, home
 * Viewport Width: 1440
 * Description: Full-width 560px photo band with a parallax background and one line of text at the lower left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/img-corridor-door.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"nc-band sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left nc-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( nodoka_counselling_t( 'alt_p05' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/img-corridor-door.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"nc-band__line"} -->
<p class="nc-band__line"><?php echo esc_html( nodoka_counselling_t( 'band_line' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
