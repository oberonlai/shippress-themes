<?php
/**
 * Title: Not found
 * Slug: yukimi-kakigori/tpl-404
 * Categories: yukimi-kakigori
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-pagehead yk-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-pagehead yk-404"><!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "yk-pagehead__title"} -->
<h1 class="wp-block-heading yk-pagehead__title"><?php echo esc_html( yukimi_kakigori_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "yk-pagehead__lead"} -->
<p class="yk-pagehead__lead"><?php echo esc_html( yukimi_kakigori_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( yukimi_kakigori_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( yukimi_kakigori_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( yukimi_kakigori_t( 'search_btn' ) ); ?>,"className":"yk-search"} /-->

<!-- wp:buttons {"className": "yk-hero__cta"} -->
<div class="wp-block-buttons yk-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( yukimi_kakigori_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
