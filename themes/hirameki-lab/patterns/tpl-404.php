<?php
/**
 * Title: Not found
 * Slug: hirameki-lab/tpl-404
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-pagehead hl-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-pagehead hl-404"><!-- wp:paragraph {"className": "hl-eyebrow"} -->
<p class="hl-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hl-pagehead__title"} -->
<h1 class="wp-block-heading hl-pagehead__title"><?php echo esc_html( hirameki_lab_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hl-pagehead__lead"} -->
<p class="hl-pagehead__lead"><?php echo esc_html( hirameki_lab_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hirameki_lab_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hirameki_lab_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hirameki_lab_t( 'search_btn' ) ); ?>,"className":"hl-search"} /-->

<!-- wp:buttons {"className": "hl-hero__cta"} -->
<div class="wp-block-buttons hl-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hirameki_lab_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
