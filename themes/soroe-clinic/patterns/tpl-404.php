<?php
/**
 * Title: Template: 404
 * Slug: soroe-clinic/tpl-404
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Inserter: false
 * Description: Not found page.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-pagehead"><!-- wp:group {"className":"so-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group so-pagehead__in"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'e4_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"so-pagehead__h"} -->
<h1 class="wp-block-heading so-pagehead__h"><?php echo esc_html( soroe_clinic_t( 'e4_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"so-body"} -->
<p class="so-body"><?php echo esc_html( soroe_clinic_t( 'e4_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"so-btn so-btn--arrow-wrap"} -->
<div class="wp-block-buttons so-btn so-btn--arrow-wrap"><!-- wp:button {"className":"so-btn so-btn--arrow"} -->
<div class="wp-block-button so-btn so-btn--arrow"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( soroe_clinic_t( 'e4_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
