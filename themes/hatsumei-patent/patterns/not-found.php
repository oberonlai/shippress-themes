<?php
/**
 * Title: 404: page not found
 * Slug: hatsumei-patent/not-found
 * Categories: hatsumei-patent
 * Keywords: 404
 * Viewport Width: 1440
 * Description: A quiet page-not-found message with a search field.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-head hp-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-head hp-section--last"><!-- wp:group {"align":"wide","className":"hp-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-narrow"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'not_found_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hp-head__title"} -->
<h1 class="wp-block-heading hp-head__title"><?php echo wp_kses_post( hatsumei_patent_t( 'not_found_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hatsumei_patent_t( 'not_found_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hatsumei_patent_t( 'not_found_04' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hatsumei_patent_t( 'not_found_05' ) ); ?>,"buttonText":<?php echo wp_json_encode( hatsumei_patent_t( 'not_found_04' ) ); ?>,"className":"hp-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( hatsumei_patent_t( 'not_found_06' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
