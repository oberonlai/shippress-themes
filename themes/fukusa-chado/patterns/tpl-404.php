<?php
/**
 * Title: Not found
 * Slug: fukusa-chado/tpl-404
 * Categories: fukusa-chado
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-pagehead fc-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-pagehead fc-404"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "fc-pagehead__title"} -->
<h1 class="wp-block-heading fc-pagehead__title"><?php echo esc_html( fukusa_chado_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "fc-pagehead__lead"} -->
<p class="fc-pagehead__lead"><?php echo esc_html( fukusa_chado_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( fukusa_chado_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( fukusa_chado_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( fukusa_chado_t( 'search_btn' ) ); ?>,"className":"fc-search"} /-->

<!-- wp:buttons {"className": "fc-hero__cta"} -->
<div class="wp-block-buttons fc-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( fukusa_chado_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
