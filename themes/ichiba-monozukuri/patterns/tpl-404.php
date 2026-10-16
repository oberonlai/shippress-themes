<?php
/**
 * Title: Not found
 * Slug: ichiba-monozukuri/tpl-404
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-pagehead im-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-pagehead im-404"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "im-pagehead__title"} -->
<h1 class="wp-block-heading im-pagehead__title"><?php echo esc_html( ichiba_monozukuri_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "im-pagehead__lead"} -->
<p class="im-pagehead__lead"><?php echo esc_html( ichiba_monozukuri_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search_btn' ) ); ?>,"className":"im-search"} /-->

<!-- wp:buttons {"className": "im-hero__cta"} -->
<div class="wp-block-buttons im-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( ichiba_monozukuri_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
