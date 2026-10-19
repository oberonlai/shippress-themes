<?php
/**
 * Title: Not found
 * Slug: tsutsumi-packaging/tpl-404
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-pagehead tp-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-pagehead tp-404"><!-- wp:paragraph {"className": "tp-eyebrow"} -->
<p class="tp-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tp-pagehead__title"} -->
<h1 class="wp-block-heading tp-pagehead__title"><?php echo esc_html( tsutsumi_packaging_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tp-pagehead__lead"} -->
<p class="tp-pagehead__lead"><?php echo esc_html( tsutsumi_packaging_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( tsutsumi_packaging_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tsutsumi_packaging_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tsutsumi_packaging_t( 'search_btn' ) ); ?>,"className":"tp-search"} /-->

<!-- wp:buttons {"className": "tp-hero__cta"} -->
<div class="wp-block-buttons tp-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( tsutsumi_packaging_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
