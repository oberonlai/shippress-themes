<?php
/**
 * Title: Home: twin-pane stage hero with ticker
 * Slug: butai-playhouse/front-hero
 * Categories: butai-playhouse
 * Viewport Width: 1440
 * Description: Two full-height photographs abutting edge to edge, a pulsing cue dot in the seam, corner links and a docked caps ticker.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"bp-hero","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-hero"><!-- wp:group {"className":"bp-hero__panes","layout":{"type":"default"}} -->
<div class="wp-block-group bp-hero__panes"><!-- wp:group {"className":"bp-hero__pane bp-hero__pane--wings sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group bp-hero__pane bp-hero__pane--wings sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-wings.webp' ) ); ?>" alt="<?php echo esc_attr( butai_playhouse_t( 'a47b246cf' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"bp-hero__label"} -->
<p class="bp-hero__label"><span class="bp-dot" aria-hidden="true"></span><?php echo wp_kses_post( butai_playhouse_t( 'kdccd8cd6' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bp-hero__corner"} -->
<p class="bp-hero__corner"><a href="/season-tickets/"><?php echo wp_kses_post( butai_playhouse_t( 'k92d6b231' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-hero__pane bp-hero__pane--stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group bp-hero__pane bp-hero__pane--stage sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-stage.webp' ) ); ?>" alt="<?php echo esc_attr( butai_playhouse_t( 'a35284c94' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"bp-hero__label"} -->
<p class="bp-hero__label"><span class="bp-dot" aria-hidden="true"></span><?php echo wp_kses_post( butai_playhouse_t( 'kba286686' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bp-hero__corner"} -->
<p class="bp-hero__corner"><a href="/season/#play-1"><?php echo wp_kses_post( butai_playhouse_t( 'kad356485' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-cue","layout":{"type":"default"}} -->
<div class="wp-block-group bp-cue"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-ticker sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group bp-ticker sp-marquee"><!-- wp:group {"className":"bp-run","layout":{"type":"default"}} -->
<div class="wp-block-group bp-run"><!-- wp:heading {"level":1,"className":"bp-ticker__text"} -->
<h1 class="wp-block-heading bp-ticker__text"><?php echo wp_kses_post( butai_playhouse_t( 'k996dcdc3' ) ); ?> </h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="bp-run" aria-hidden="true"><p class="bp-ticker__text"><?php echo wp_kses_post( butai_playhouse_t( 'k996dcdc3' ) ); ?> </p></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bp-hero__foot","layout":{"type":"default"}} -->
<div class="wp-block-group bp-hero__foot"><!-- wp:paragraph -->
<p><a href="/season-tickets/"><?php echo wp_kses_post( butai_playhouse_t( 'k92d6b231' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/season/#play-1"><?php echo wp_kses_post( butai_playhouse_t( 'kdcc7593f' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
