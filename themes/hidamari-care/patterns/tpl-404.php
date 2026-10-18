<?php
/**
 * Title: Not found
 * Slug: hidamari-care/tpl-404
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-pagehead hc-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-pagehead hc-404"><!-- wp:paragraph {"className": "hc-eyebrow"} -->
<p class="hc-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hc-pagehead__title"} -->
<h1 class="wp-block-heading hc-pagehead__title"><?php echo esc_html( hidamari_care_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hc-pagehead__lead"} -->
<p class="hc-pagehead__lead"><?php echo esc_html( hidamari_care_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hidamari_care_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hidamari_care_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hidamari_care_t( 'search_btn' ) ); ?>,"className":"hc-search"} /-->

<!-- wp:buttons {"className": "hc-hero__cta"} -->
<div class="wp-block-buttons hc-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hidamari_care_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
