<?php
/**
 * Title: Not found
 * Slug: soroban-kaikei/tpl-404
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-pagehead sk-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-pagehead sk-404"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sk-pagehead__title"} -->
<h1 class="wp-block-heading sk-pagehead__title"><?php echo esc_html( soroban_kaikei_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sk-pagehead__lead"} -->
<p class="sk-pagehead__lead"><?php echo esc_html( soroban_kaikei_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( soroban_kaikei_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( soroban_kaikei_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( soroban_kaikei_t( 'search_btn' ) ); ?>,"className":"sk-search"} /-->

<!-- wp:buttons {"className": "sk-hero__cta"} -->
<div class="wp-block-buttons sk-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( soroban_kaikei_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
