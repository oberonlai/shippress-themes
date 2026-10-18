<?php
/**
 * Title: Not found
 * Slug: mamori-hoken/tpl-404
 * Categories: mamori-hoken
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-pagehead mh-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-pagehead mh-404"><!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mh-pagehead__title"} -->
<h1 class="wp-block-heading mh-pagehead__title"><?php echo esc_html( mamori_hoken_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mh-pagehead__lead"} -->
<p class="mh-pagehead__lead"><?php echo esc_html( mamori_hoken_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( mamori_hoken_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( mamori_hoken_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( mamori_hoken_t( 'search_btn' ) ); ?>,"className":"mh-search"} /-->

<!-- wp:buttons {"className": "mh-hero__cta"} -->
<div class="wp-block-buttons mh-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( mamori_hoken_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
