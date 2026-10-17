<?php
/**
 * Title: Not found
 * Slug: hotaru-ehon/tpl-404
 * Categories: hotaru-ehon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-pagehead ht-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-pagehead ht-404"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ht-pagehead__title"} -->
<h1 class="wp-block-heading ht-pagehead__title"><?php echo esc_html( hotaru_ehon_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ht-pagehead__lead"} -->
<p class="ht-pagehead__lead"><?php echo esc_html( hotaru_ehon_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hotaru_ehon_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hotaru_ehon_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hotaru_ehon_t( 'search_btn' ) ); ?>,"className":"ht-search"} /-->

<!-- wp:buttons {"className": "ht-hero__cta"} -->
<div class="wp-block-buttons ht-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hotaru_ehon_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
