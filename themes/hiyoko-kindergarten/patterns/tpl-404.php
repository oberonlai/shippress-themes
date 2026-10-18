<?php
/**
 * Title: Not found
 * Slug: hiyoko-kindergarten/tpl-404
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-pagehead hk-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-pagehead hk-404"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hk-pagehead__title"} -->
<h1 class="wp-block-heading hk-pagehead__title"><?php echo esc_html( hiyoko_kindergarten_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hk-pagehead__lead"} -->
<p class="hk-pagehead__lead"><?php echo esc_html( hiyoko_kindergarten_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'search_btn' ) ); ?>,"className":"hk-search"} /-->

<!-- wp:buttons {"className": "hk-hero__cta"} -->
<div class="wp-block-buttons hk-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hiyoko_kindergarten_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
