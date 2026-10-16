<?php
/**
 * Title: Not found
 * Slug: urushi-nuri/tpl-404
 * Categories: urushi-nuri
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-pagehead un-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-pagehead un-404"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "un-pagehead__title"} -->
<h1 class="wp-block-heading un-pagehead__title"><?php echo esc_html( urushi_nuri_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "un-pagehead__lead"} -->
<p class="un-pagehead__lead"><?php echo esc_html( urushi_nuri_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( urushi_nuri_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( urushi_nuri_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( urushi_nuri_t( 'search_btn' ) ); ?>,"className":"un-search"} /-->

<!-- wp:buttons {"className": "un-hero__cta"} -->
<div class="wp-block-buttons un-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( urushi_nuri_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
