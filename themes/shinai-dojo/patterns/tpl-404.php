<?php
/**
 * Title: Not found
 * Slug: shinai-dojo/tpl-404
 * Categories: shinai-dojo
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-pagehead sd-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-pagehead sd-404"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sd-pagehead__title"} -->
<h1 class="wp-block-heading sd-pagehead__title"><?php echo esc_html( shinai_dojo_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sd-pagehead__lead"} -->
<p class="sd-pagehead__lead"><?php echo esc_html( shinai_dojo_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( shinai_dojo_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( shinai_dojo_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( shinai_dojo_t( 'search_btn' ) ); ?>,"className":"sd-search"} /-->

<!-- wp:buttons {"className": "sd-hero__cta"} -->
<div class="wp-block-buttons sd-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( shinai_dojo_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
