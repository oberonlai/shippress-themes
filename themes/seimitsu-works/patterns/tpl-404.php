<?php
/**
 * Title: Not found
 * Slug: seimitsu-works/tpl-404
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-pagehead sw-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-pagehead sw-404"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sw-pagehead__title"} -->
<h1 class="wp-block-heading sw-pagehead__title"><?php echo esc_html( seimitsu_works_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-pagehead__lead"} -->
<p class="sw-pagehead__lead"><?php echo esc_html( seimitsu_works_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( seimitsu_works_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( seimitsu_works_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( seimitsu_works_t( 'search_btn' ) ); ?>,"className":"sw-search"} /-->

<!-- wp:buttons {"className": "sw-hero__cta"} -->
<div class="wp-block-buttons sw-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( seimitsu_works_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
