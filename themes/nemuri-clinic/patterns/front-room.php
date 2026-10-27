<?php
/**
 * Title: Home: study room (parallax band)
 * Slug: nemuri-clinic/front-room
 * Categories: nemuri-clinic
 * Inserter: yes
 * Viewport Width: 1440
 * Description: Full-width photograph that moves slower than the page, with a centred white panel.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/study-room.webp' ) ); ?>","dimRatio":0,"align":"full","className":"nc-room sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull nc-room sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( 'Quiet clinic bedroom with a neatly made bed, bedside lamp, and sleep recording device.' ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/study-room.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"nc-room__panel","layout":{"type":"default"}} -->
<div class="wp-block-group nc-room__panel"><!-- wp:paragraph {"className":"nc-label"} -->
<p class="nc-label"><?php echo wp_kses_post( nemuri_clinic_t( 'k28b34e40' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"nc-room__t"} -->
<h2 class="wp-block-heading nc-room__t"><?php echo wp_kses_post( nemuri_clinic_t( 'k5b9b468d' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( nemuri_clinic_t( 'k23299dc3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nc-more nc-more--c"} -->
<p class="nc-more nc-more--c"><a href="/night-study/"><?php echo wp_kses_post( nemuri_clinic_t( 'k48b089e7' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
