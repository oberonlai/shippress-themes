<?php
/**
 * Title: Home: film still
 * Slug: yoake-patisserie/front-film
 * Categories: yoake-patisserie
 * Viewport Width: 1440
 * Description: Full-bleed photograph with one tracked line, with parallax.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/glaze-still.webp' ) ); ?>","dimRatio":0,"align":"full","className":"yk-film sp-parallax","layout":{"type":"default"},"alt":"A tray of just-baked croissants and brioche steams on a marble sill beside a bright window."} -->
<div class="wp-block-cover alignfull yk-film sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yoake_patisserie_t( 'a6923fe5b' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/glaze-still.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"yk-film__line"} -->
<p class="yk-film__line"><?php echo wp_kses_post( yoake_patisserie_t( 'kae72f0b1' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
