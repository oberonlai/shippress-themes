<?php
/**
 * Title: Home: parallax band
 * Slug: kodama-sound/band
 * Categories: kodama-sound
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of a mix stage with a two-line statement.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/band-mix-stage.webp' ) ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","isDark":true,"className":"kd-band sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light kd-band sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kodama_sound_t( 'alt_p09' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-mix-stage.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":2,"className":"kd-h2 kd-h2--band"} -->
<h2 class="wp-block-heading kd-h2 kd-h2--band"><?php echo kodama_sound_lines( 'band_h' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kd-bandp"} -->
<p class="kd-bandp"><?php echo esc_html( kodama_sound_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
