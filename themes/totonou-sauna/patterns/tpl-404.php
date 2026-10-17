<?php
/**
 * Title: Not found
 * Slug: totonou-sauna/tpl-404
 * Categories: totonou-sauna
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-pagehead tn-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-pagehead tn-404"><!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tn-pagehead__title"} -->
<h1 class="wp-block-heading tn-pagehead__title"><?php echo esc_html( totonou_sauna_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tn-pagehead__lead"} -->
<p class="tn-pagehead__lead"><?php echo esc_html( totonou_sauna_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( totonou_sauna_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( totonou_sauna_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( totonou_sauna_t( 'search_btn' ) ); ?>,"className":"tn-search"} /-->

<!-- wp:buttons {"className": "tn-hero__cta"} -->
<div class="wp-block-buttons tn-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( totonou_sauna_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
