<?php
/**
 * Title: Not found
 * Slug: kanmi-dokoro/tpl-404
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-pagehead kd-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-pagehead kd-404"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kd-pagehead__title"} -->
<h1 class="wp-block-heading kd-pagehead__title"><?php echo esc_html( kanmi_dokoro_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-pagehead__lead"} -->
<p class="kd-pagehead__lead"><?php echo esc_html( kanmi_dokoro_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kanmi_dokoro_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kanmi_dokoro_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kanmi_dokoro_t( 'search_btn' ) ); ?>,"className":"kd-search"} /-->

<!-- wp:buttons {"className": "kd-hero__cta"} -->
<div class="wp-block-buttons kd-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kanmi_dokoro_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
