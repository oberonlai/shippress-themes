<?php
/**
 * Title: Home: arrival band
 * Slug: kaigi-centre/front-band
 * Categories: kaigi-centre
 * Keywords: conference, front-band
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the morning foyer with a quote box.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/foyer-arrival.webp' ) ); ?>","dimRatio":0,"isDark":false,"align":"full","className":"kc-band sp-parallax","minHeight":560,"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light kc-band sp-parallax" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kaigi_centre_t( 'alt_foyer' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/foyer-arrival.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"kc-band__box","layout":{"type":"default"}} -->
<div class="wp-block-group kc-band__box">
<!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( kaigi_centre_t( 'band_by' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"kc-band__quote"} -->
<p class="kc-band__quote"><?php echo esc_html( kaigi_centre_t( 'band_q' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
