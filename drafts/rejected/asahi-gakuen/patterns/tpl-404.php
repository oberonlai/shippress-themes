<?php
/**
 * Title: Not found
 * Slug: asahi-gakuen/tpl-404
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-pagehead ag-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-pagehead ag-404"><!-- wp:paragraph {"className": "ag-eyebrow"} -->
<p class="ag-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ag-pagehead__title"} -->
<h1 class="wp-block-heading ag-pagehead__title"><?php echo esc_html( asahi_gakuen_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ag-pagehead__lead"} -->
<p class="ag-pagehead__lead"><?php echo esc_html( asahi_gakuen_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( asahi_gakuen_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( asahi_gakuen_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( asahi_gakuen_t( 'search_btn' ) ); ?>,"className":"ag-search"} /-->

<!-- wp:buttons {"className": "ag-hero__cta"} -->
<div class="wp-block-buttons ag-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( asahi_gakuen_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
