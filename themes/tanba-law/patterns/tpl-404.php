<?php
/**
 * Title: Not found
 * Slug: tanba-law/tpl-404
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-pagehead tb-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-pagehead tb-404"><!-- wp:paragraph {"className": "tb-eyebrow"} -->
<p class="tb-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tb-pagehead__title"} -->
<h1 class="wp-block-heading tb-pagehead__title"><?php echo esc_html( tanba_law_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tb-pagehead__lead"} -->
<p class="tb-pagehead__lead"><?php echo esc_html( tanba_law_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( tanba_law_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tanba_law_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tanba_law_t( 'search_btn' ) ); ?>,"className":"tb-search"} /-->

<!-- wp:buttons {"className": "tb-hero__cta"} -->
<div class="wp-block-buttons tb-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( tanba_law_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
