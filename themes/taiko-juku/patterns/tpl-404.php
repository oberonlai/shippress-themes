<?php
/**
 * Title: Not found
 * Slug: taiko-juku/tpl-404
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-pagehead tj-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-pagehead tj-404"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tj-pagehead__title"} -->
<h1 class="wp-block-heading tj-pagehead__title"><?php echo esc_html( taiko_juku_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-pagehead__lead"} -->
<p class="tj-pagehead__lead"><?php echo esc_html( taiko_juku_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( taiko_juku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( taiko_juku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( taiko_juku_t( 'search_btn' ) ); ?>,"className":"tj-search"} /-->

<!-- wp:buttons {"className": "tj-hero__cta"} -->
<div class="wp-block-buttons tj-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( taiko_juku_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
