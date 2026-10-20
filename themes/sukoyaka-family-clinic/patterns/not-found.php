<?php
/**
 * Title: 404: page not found
 * Slug: sukoyaka-family-clinic/not-found
 * Categories: sukoyaka-family-clinic
 * Keywords: 404
 * Viewport Width: 1440
 * Description: A quiet page-not-found message with a search field.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head sf-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head sf-section--last"><!-- wp:group {"align":"wide","className":"sf-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-narrow"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'not_found_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sf-head__title"} -->
<h1 class="wp-block-heading sf-head__title"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'not_found_02' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'not_found_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'not_found_04' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'not_found_05' ) ); ?>,"buttonText":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'not_found_04' ) ); ?>,"className":"sf-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'not_found_06' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
