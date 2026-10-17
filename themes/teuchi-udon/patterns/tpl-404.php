<?php
/**
 * Title: Not found
 * Slug: teuchi-udon/tpl-404
 * Categories: teuchi-udon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-pagehead tu-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-pagehead tu-404"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tu-pagehead__title"} -->
<h1 class="wp-block-heading tu-pagehead__title"><?php echo esc_html( teuchi_udon_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tu-pagehead__lead"} -->
<p class="tu-pagehead__lead"><?php echo esc_html( teuchi_udon_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( teuchi_udon_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( teuchi_udon_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( teuchi_udon_t( 'search_btn' ) ); ?>,"className":"tu-search"} /-->

<!-- wp:buttons {"className": "tu-hero__cta"} -->
<div class="wp-block-buttons tu-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( teuchi_udon_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
