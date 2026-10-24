<?php
/**
 * Title: Home: parallax recital band
 * Slug: neiro-music/front-band
 * Categories: neiro-music
 * Description: Full-bleed recital hall photograph with parallax, top gradient and a centred 360px text column.
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p16.webp' ) ); ?>","dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"nm-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light nm-band sp-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( neiro_music_t( 'alt_p16' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p16.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><?php echo neiro_music_rail( neiro_music_t( 'rail_band' ) ); ?>

<!-- wp:group {"className":"nm-band__in sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group nm-band__in sp-stagger"><!-- wp:heading {"className":"nm-h2 sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading nm-h2 sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'band_h1' ) ); ?><br><?php echo esc_html( neiro_music_t( 'band_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( neiro_music_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo neiro_music_link( neiro_music_t( 'band_link' ), '/recitals/', 'sp-reveal sp-reveal--up' ); ?></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
