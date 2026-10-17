<?php
/**
 * Title: Not found
 * Slug: shirokuro-camera/tpl-404
 * Categories: shirokuro-camera
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-pagehead sc-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-pagehead sc-404"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sc-pagehead__title"} -->
<h1 class="wp-block-heading sc-pagehead__title"><?php echo esc_html( shirokuro_camera_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-pagehead__lead"} -->
<p class="sc-pagehead__lead"><?php echo esc_html( shirokuro_camera_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( shirokuro_camera_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( shirokuro_camera_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( shirokuro_camera_t( 'search_btn' ) ); ?>,"className":"sc-search"} /-->

<!-- wp:buttons {"className": "sc-hero__cta"} -->
<div class="wp-block-buttons sc-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( shirokuro_camera_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
