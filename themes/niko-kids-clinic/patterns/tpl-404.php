<?php
/**
 * Title: Not found
 * Slug: niko-kids-clinic/tpl-404
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-pagehead nk-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-pagehead nk-404"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "nk-pagehead__title"} -->
<h1 class="wp-block-heading nk-pagehead__title"><?php echo esc_html( niko_kids_clinic_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-pagehead__lead"} -->
<p class="nk-pagehead__lead"><?php echo esc_html( niko_kids_clinic_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( niko_kids_clinic_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( niko_kids_clinic_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( niko_kids_clinic_t( 'search_btn' ) ); ?>,"className":"nk-search"} /-->

<!-- wp:buttons {"className": "nk-hero__cta"} -->
<div class="wp-block-buttons nk-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( niko_kids_clinic_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
