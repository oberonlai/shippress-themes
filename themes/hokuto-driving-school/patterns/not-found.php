<?php
/**
 * Title: 404: wrong turn
 * Slug: hokuto-driving-school/not-found
 * Categories: hokuto-driving-school
 * Keywords: 404
 * Viewport Width: 1440
 * Description: A quiet page-not-found message with a search field.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head hk-section--last"><!-- wp:group {"align":"wide","className":"hk-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-narrow"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'not_found_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'not_found_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'not_found_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hokuto_driving_school_t( 'not_found_04' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hokuto_driving_school_t( 'not_found_05' ) ); ?>,"buttonText":<?php echo wp_json_encode( hokuto_driving_school_t( 'not_found_04' ) ); ?>,"className":"hk-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( hokuto_driving_school_t( 'not_found_06' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
