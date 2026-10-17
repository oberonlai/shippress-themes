<?php
/**
 * Title: Not found
 * Slug: shirayami-butoh/tpl-404
 * Categories: shirayami-butoh
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-pagehead sb-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-pagehead sb-404"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sb-pagehead__title"} -->
<h1 class="wp-block-heading sb-pagehead__title"><?php echo esc_html( shirayami_butoh_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sb-pagehead__lead"} -->
<p class="sb-pagehead__lead"><?php echo esc_html( shirayami_butoh_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( shirayami_butoh_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( shirayami_butoh_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( shirayami_butoh_t( 'search_btn' ) ); ?>,"className":"sb-search"} /-->

<!-- wp:buttons {"className": "sb-hero__cta"} -->
<div class="wp-block-buttons sb-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( shirayami_butoh_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
