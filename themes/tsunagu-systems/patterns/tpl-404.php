<?php
/**
 * Title: Not found
 * Slug: tsunagu-systems/tpl-404
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-pagehead ts-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-pagehead ts-404"><!-- wp:paragraph {"className": "ts-eyebrow"} -->
<p class="ts-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ts-pagehead__title"} -->
<h1 class="wp-block-heading ts-pagehead__title"><?php echo esc_html( tsunagu_systems_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ts-pagehead__lead"} -->
<p class="ts-pagehead__lead"><?php echo esc_html( tsunagu_systems_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( tsunagu_systems_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tsunagu_systems_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tsunagu_systems_t( 'search_btn' ) ); ?>,"className":"ts-search"} /-->

<!-- wp:buttons {"className": "ts-hero__cta"} -->
<div class="wp-block-buttons ts-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( tsunagu_systems_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
