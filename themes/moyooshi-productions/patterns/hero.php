<?php
/**
 * Title: Hero: photograph and cue cells
 * Slug: moyooshi-productions/hero
 * Categories: moyooshi-productions
 * Viewport Width: 1440
 * Description: Full-bleed documentary photograph with the headline upper left and an outlined info bar of run-of-show cue cells docked on its lower edge.
 */
?>
<!-- wp:cover {"url":"<?php echo moyooshi_productions_img( 'hero-build.webp' ); ?>","alt":"<?php echo moyooshi_productions_a( 'alt_p01' ); ?>","dimRatio":0,"minHeight":640,"minHeightUnit":"px","tagName":"section","className":"mp-hero sp-parallax"} -->
<section class="wp-block-cover mp-hero sp-parallax" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo moyooshi_productions_a( 'alt_p01' ); ?>" src="<?php echo moyooshi_productions_img( 'hero-build.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"mp-hero__in","layout":{"type":"default"}} -->
<div class="wp-block-group mp-hero__in"><!-- wp:group {"className":"mp-hero__top","layout":{"type":"default"}} -->
<div class="wp-block-group mp-hero__top"><!-- wp:heading {"level":1,"className":"mp-h1"} -->
<h1 class="wp-block-heading mp-h1"><?php echo esc_html( moyooshi_productions_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mp-hero__sub"} -->
<p class="mp-hero__sub"><?php echo esc_html( moyooshi_productions_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-bar","layout":{"type":"default"}} -->
<div class="wp-block-group mp-bar"><!-- wp:group {"className":"mp-cell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cell"><!-- wp:paragraph {"className":"mp-cell__l"} -->
<p class="mp-cell__l"><?php echo esc_html( moyooshi_productions_t( 'cell_l' ) ); ?> 1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__w"} -->
<p class="mp-cell__w"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'cell_w1' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__t"} -->
<p class="mp-cell__t">06:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cell"><!-- wp:paragraph {"className":"mp-cell__l"} -->
<p class="mp-cell__l"><?php echo esc_html( moyooshi_productions_t( 'cell_l' ) ); ?> 2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__w"} -->
<p class="mp-cell__w"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'cell_w2' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__t"} -->
<p class="mp-cell__t">14:00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cell"><!-- wp:paragraph {"className":"mp-cell__l"} -->
<p class="mp-cell__l"><?php echo esc_html( moyooshi_productions_t( 'cell_l' ) ); ?> 3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__w"} -->
<p class="mp-cell__w"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'cell_w3' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__t"} -->
<p class="mp-cell__t">18:30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cell","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cell"><!-- wp:paragraph {"className":"mp-cell__l"} -->
<p class="mp-cell__l"><?php echo esc_html( moyooshi_productions_t( 'cell_l' ) ); ?> 4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__w"} -->
<p class="mp-cell__w"><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>"><?php echo esc_html( moyooshi_productions_t( 'cell_w4' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mp-cell__t"} -->
<p class="mp-cell__t">23:30</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mp-cell mp-cell--empty","layout":{"type":"default"}} -->
<div class="wp-block-group mp-cell mp-cell--empty"><!-- wp:paragraph {"className":"mp-cell__l"} -->
<p class="mp-cell__l">( 01 )</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
