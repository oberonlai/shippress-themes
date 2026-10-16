<?php
/**
 * Title: Not found
 * Slug: tsuribito-tackle/tpl-404
 * Categories: tsuribito-tackle
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-pagehead tt-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-pagehead tt-404"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tt-pagehead__title"} -->
<h1 class="wp-block-heading tt-pagehead__title"><?php echo esc_html( tsuribito_tackle_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-pagehead__lead"} -->
<p class="tt-pagehead__lead"><?php echo esc_html( tsuribito_tackle_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( tsuribito_tackle_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tsuribito_tackle_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tsuribito_tackle_t( 'search_btn' ) ); ?>,"className":"tt-search"} /-->

<!-- wp:buttons {"className": "tt-hero__cta"} -->
<div class="wp-block-buttons tt-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( tsuribito_tackle_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
