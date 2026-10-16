<?php
/**
 * Title: Not found
 * Slug: koma-manga/tpl-404
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-pagehead km-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-pagehead km-404"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "km-pagehead__title"} -->
<h1 class="wp-block-heading km-pagehead__title"><?php echo esc_html( koma_manga_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "km-pagehead__lead"} -->
<p class="km-pagehead__lead"><?php echo esc_html( koma_manga_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( koma_manga_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( koma_manga_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( koma_manga_t( 'search_btn' ) ); ?>,"className":"km-search"} /-->

<!-- wp:buttons {"className": "km-hero__cta"} -->
<div class="wp-block-buttons km-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( koma_manga_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
