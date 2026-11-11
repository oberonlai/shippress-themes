<?php
/**
 * Title: Home: one boat, one service
 * Slug: nagisa-grill/front-concept
 * Categories: nagisa-grill
 * Keywords: concept, story, boat
 * Viewport Width: 1440
 * Description: Full-bleed dim photograph of the boat at the quay with the concept in white on the left half.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-quay.webp' ) ); ?>","alt":"A wooden day boat moored at a stone quay while crew unload fish crates.","dimRatio":50,"overlayColor":"scene","isUserOverlayColor":true,"minHeight":900,"contentPosition":"center left","align":"full","className":"ng-concept","tagName":"section"} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-center-left ng-concept" style="min-height:900px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( nagisa_grill_t( 'af2d8713e' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p02-quay.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-scene-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"ng-concept__col"} -->
<div class="wp-block-group ng-concept__col"><!-- wp:group {"className":"ng-label"} -->
<div class="wp-block-group ng-label"><?php echo nagisa_grill_tide(); ?>

<!-- wp:paragraph {"className":"ng-label__t"} -->
<p class="ng-label__t"><?php echo wp_kses_post( nagisa_grill_t( 'kd99a604c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"className":"ng-h-photo","fontSize":"x-large"} -->
<h2 class="wp-block-heading ng-h-photo has-x-large-font-size"><?php echo wp_kses_post( nagisa_grill_t( 'k536b5b88' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ng-copy"} -->
<p class="ng-copy"><?php echo wp_kses_post( nagisa_grill_t( 'k8e306ac7' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ng-copy"} -->
<p class="ng-copy"><?php echo wp_kses_post( nagisa_grill_t( 'k56dbddfe' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
