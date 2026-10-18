<?php
/**
 * Title: Not found
 * Slug: michishirube-consulting/tpl-404
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-pagehead mc-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-pagehead mc-404"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mc-pagehead__title"} -->
<h1 class="wp-block-heading mc-pagehead__title"><?php echo esc_html( michishirube_consulting_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-pagehead__lead"} -->
<p class="mc-pagehead__lead"><?php echo esc_html( michishirube_consulting_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( michishirube_consulting_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( michishirube_consulting_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( michishirube_consulting_t( 'search_btn' ) ); ?>,"className":"mc-search"} /-->

<!-- wp:buttons {"className": "mc-hero__cta"} -->
<div class="wp-block-buttons mc-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( michishirube_consulting_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
