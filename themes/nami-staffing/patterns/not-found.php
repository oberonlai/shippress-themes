<?php
/**
 * Title: 404: page not found
 * Slug: nami-staffing/not-found
 * Categories: nami-staffing
 * Keywords: 404
 * Viewport Width: 1440
 * Description: A quiet page-not-found message with a search field.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-head ns-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-head ns-section--last"><!-- wp:group {"align":"wide","className":"ns-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-narrow"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'not_found_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ns-head__title"} -->
<h1 class="wp-block-heading ns-head__title"><?php echo wp_kses_post( nami_staffing_t( 'not_found_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( nami_staffing_t( 'not_found_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( nami_staffing_t( 'not_found_04' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( nami_staffing_t( 'not_found_05' ) ); ?>,"buttonText":<?php echo wp_json_encode( nami_staffing_t( 'not_found_04' ) ); ?>,"className":"ns-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( nami_staffing_t( 'not_found_06' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
