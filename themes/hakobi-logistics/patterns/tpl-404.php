<?php
/**
 * Title: Not found
 * Slug: hakobi-logistics/tpl-404
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-pagehead hg-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-pagehead hg-404"><!-- wp:paragraph {"className": "hg-eyebrow"} -->
<p class="hg-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hg-pagehead__title"} -->
<h1 class="wp-block-heading hg-pagehead__title"><?php echo esc_html( hakobi_logistics_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hg-pagehead__lead"} -->
<p class="hg-pagehead__lead"><?php echo esc_html( hakobi_logistics_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hakobi_logistics_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hakobi_logistics_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hakobi_logistics_t( 'search_btn' ) ); ?>,"className":"hg-search"} /-->

<!-- wp:buttons {"className": "hg-hero__cta"} -->
<div class="wp-block-buttons hg-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hakobi_logistics_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
