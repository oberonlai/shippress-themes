<?php
/**
 * Title: Not found
 * Slug: karan-geta/tpl-404
 * Categories: karan-geta
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-pagehead kg-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-pagehead kg-404"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kg-pagehead__title"} -->
<h1 class="wp-block-heading kg-pagehead__title"><?php echo esc_html( karan_geta_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-pagehead__lead"} -->
<p class="kg-pagehead__lead"><?php echo esc_html( karan_geta_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( karan_geta_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( karan_geta_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( karan_geta_t( 'search_btn' ) ); ?>,"className":"kg-search"} /-->

<!-- wp:buttons {"className": "kg-hero__cta"} -->
<div class="wp-block-buttons kg-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( karan_geta_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
