<?php
/**
 * Title: Home: giant metric and headline
 * Slug: kizuki-construction/hero-giant-metric
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Description: White first screen on a 12-column grid: the giant handover count in bengara Roboto Condensed on the left with its label, the headline, one paragraph and one solid button on the right, and a thin documentary photo strip of a concrete pour along the bottom.
 */
?>
<!-- wp:group {"tagName":"section","className":"kz-gm","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-gm"><!-- wp:group {"className":"kz-gm__metric","layout":{"type":"default"}} -->
<div class="wp-block-group kz-gm__metric"><!-- wp:paragraph {"className":"kz-gm__num"} -->
<p class="kz-gm__num"><?php echo esc_html( kizuki_construction_t( 'hero_metric' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kz-gm__label"} -->
<p class="kz-gm__label"><?php echo esc_html( kizuki_construction_t( 'hero_metric_l' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-gm__copy","layout":{"type":"default"}} -->
<div class="wp-block-group kz-gm__copy"><!-- wp:heading {"level":1,"className":"kz-gm__title"} -->
<h1 class="wp-block-heading kz-gm__title"><?php echo esc_html( kizuki_construction_t( 'hero_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kz-gm__lead"} -->
<p class="kz-gm__lead"><?php echo esc_html( kizuki_construction_t( 'hero_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kz-gm__btn"} -->
<div class="wp-block-buttons kz-gm__btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/survey/"><?php echo esc_html( kizuki_construction_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kz-gm__strip"} -->
<figure class="wp-block-image size-full kz-gm__strip"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/pour.webp' ) ); ?>" alt="<?php echo esc_attr( kizuki_construction_t( 'alt_pour' ) ); ?>"/></figure>
<!-- /wp:image --></section>
<!-- /wp:group -->
