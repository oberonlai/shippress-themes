<?php
/**
 * Title: 404: page not found
 * Slug: aozora-primary-school/not-found
 * Categories: aozora-primary-school
 * Keywords: 404
 * Viewport Width: 1440
 * Description: A quiet page-not-found message with a search field.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-head ap-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-head ap-section--last"><!-- wp:group {"align":"wide","className":"ap-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-narrow"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'not_found_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ap-head__title"} -->
<h1 class="wp-block-heading ap-head__title"><?php echo wp_kses_post( aozora_primary_school_t( 'not_found_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( aozora_primary_school_t( 'not_found_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( aozora_primary_school_t( 'not_found_04' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( aozora_primary_school_t( 'not_found_05' ) ); ?>,"buttonText":<?php echo wp_json_encode( aozora_primary_school_t( 'not_found_04' ) ); ?>,"className":"ap-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( aozora_primary_school_t( 'not_found_06' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
