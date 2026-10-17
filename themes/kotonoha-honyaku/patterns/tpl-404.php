<?php
/**
 * Title: Not found
 * Slug: kotonoha-honyaku/tpl-404
 * Categories: kotonoha-honyaku
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-pagehead kh-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-pagehead kh-404"><!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kh-pagehead__title"} -->
<h1 class="wp-block-heading kh-pagehead__title"><?php echo esc_html( kotonoha_honyaku_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kh-pagehead__lead"} -->
<p class="kh-pagehead__lead"><?php echo esc_html( kotonoha_honyaku_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search_btn' ) ); ?>,"className":"kh-search"} /-->

<!-- wp:buttons {"className": "kh-hero__cta"} -->
<div class="wp-block-buttons kh-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kotonoha_honyaku_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
