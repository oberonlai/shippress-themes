<?php
/**
 * Title: Home: the coach is waiting (parallax band)
 * Slug: hobi-journeys/front-band
 * Categories: hobi-journeys
 * Viewport Width: 1440
 * Description: Full-bleed aerial photograph with a parallax drift and one heavy line.
 */
?>
<!-- wp:group {"className":"hj-band sp-parallax","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hj-band sp-parallax"><!-- wp:image {"sizeSlug":"full","className":"hj-band__img"} -->
<figure class="wp-block-image size-full hj-band__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/band-coast-road.webp' ) ); ?>" alt="<?php echo esc_attr( hobi_journeys_t( 'a2bcbd884' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<span class="hj-band__scrim" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"hj-band__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hj-band__txt"><!-- wp:heading {"level":2,"className":"hj-band__h"} -->
<h2 class="wp-block-heading hj-band__h"><?php echo wp_kses_post( hobi_journeys_t( 'k48d6e3a4' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hj-band__p"} -->
<p class="hj-band__p"><?php echo wp_kses_post( hobi_journeys_t( 'k62cde58a' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
