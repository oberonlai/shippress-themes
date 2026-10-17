<?php
/**
 * Title: Not found
 * Slug: itomaki-yarn/tpl-404
 * Categories: itomaki-yarn
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-pagehead iy-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-pagehead iy-404"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "iy-pagehead__title"} -->
<h1 class="wp-block-heading iy-pagehead__title"><?php echo esc_html( itomaki_yarn_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "iy-pagehead__lead"} -->
<p class="iy-pagehead__lead"><?php echo esc_html( itomaki_yarn_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( itomaki_yarn_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( itomaki_yarn_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( itomaki_yarn_t( 'search_btn' ) ); ?>,"className":"iy-search"} /-->

<!-- wp:buttons {"className": "iy-hero__cta"} -->
<div class="wp-block-buttons iy-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( itomaki_yarn_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
