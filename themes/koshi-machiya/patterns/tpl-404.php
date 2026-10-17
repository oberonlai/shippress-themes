<?php
/**
 * Title: Not found
 * Slug: koshi-machiya/tpl-404
 * Categories: koshi-machiya
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-pagehead kc-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-pagehead kc-404"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kc-pagehead__title"} -->
<h1 class="wp-block-heading kc-pagehead__title"><?php echo esc_html( koshi_machiya_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kc-pagehead__lead"} -->
<p class="kc-pagehead__lead"><?php echo esc_html( koshi_machiya_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( koshi_machiya_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( koshi_machiya_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( koshi_machiya_t( 'search_btn' ) ); ?>,"className":"kc-search"} /-->

<!-- wp:buttons {"className": "kc-hero__cta"} -->
<div class="wp-block-buttons kc-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( koshi_machiya_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
