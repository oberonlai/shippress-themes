<?php
/**
 * Title: Home: the block (parallax)
 * Slug: shio-butchers/front-block
 * Categories: shio-butchers
 * Keywords: butcher, shop, home
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph with a paper caption panel and three counting figures.
 */
?>
<!-- wp:cover {"url":"<?php echo shio_butchers_img( 'h12-salt.webp' ); ?>","dimRatio":0,"isDark":false,"alt":"A butcher scattering coarse sea salt across an empty wooden cutting block after closing.","className":"sb-block-band sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light sb-block-band sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( shio_butchers_t( 'ab137fb7c' ) ); ?>" src="<?php echo shio_butchers_img( 'h12-salt.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"sb-caption","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-caption"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo wp_kses_post( shio_butchers_t( 'kef9ec279' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( shio_butchers_t( 'k7a6a9fae' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sb-figs","layout":{"type":"flex"}} -->
<div class="wp-block-group sb-figs"><!-- wp:group {"className":"sb-fig","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-fig"><!-- wp:paragraph {"className":"sb-fig__n sp-reveal sp-count"} -->
<p class="sb-fig__n sp-reveal sp-count">21</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-fig__l"} -->
<p class="sb-fig__l"><?php echo wp_kses_post( shio_butchers_t( 'k82c50a03' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-fig","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-fig"><!-- wp:paragraph {"className":"sb-fig__n sp-reveal sp-count"} -->
<p class="sb-fig__n sp-reveal sp-count">3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-fig__l"} -->
<p class="sb-fig__l"><?php echo wp_kses_post( shio_butchers_t( 'k1f590e9c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sb-fig","layout":{"type":"constrained"}} -->
<div class="wp-block-group sb-fig"><!-- wp:paragraph {"className":"sb-fig__n sp-reveal sp-count"} -->
<p class="sb-fig__n sp-reveal sp-count">41</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sb-fig__l"} -->
<p class="sb-fig__l"><?php echo wp_kses_post( shio_butchers_t( 'k54102e8e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
