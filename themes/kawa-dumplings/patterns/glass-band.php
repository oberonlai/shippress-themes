<?php
/**
 * Title: Home: kitchen glass band
 * Slug: kawa-dumplings/glass-band
 * Categories: kawa-dumplings
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the queue at the glass with a paper card.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( kawa_dumplings_img( 'queue-through-glass.webp' ) ); ?>","dimRatio":0,"minHeight":560,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"kd-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left is-light kd-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kawa_dumplings_t( 'alt_p10' ) ); ?>" src="<?php echo esc_url( kawa_dumplings_img( 'queue-through-glass.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kd-band__card","layout":{"type":"default"}} -->
<div class="wp-block-group kd-band__card"><!-- wp:paragraph {"className":"kd-band__h"} -->
<p class="kd-band__h"><?php echo esc_html( kawa_dumplings_t( 'band_h' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kd-band__p"} -->
<p class="kd-band__p"><?php echo esc_html( kawa_dumplings_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
