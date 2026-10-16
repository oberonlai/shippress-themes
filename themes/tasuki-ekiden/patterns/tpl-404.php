<?php
/**
 * Title: Not found
 * Slug: tasuki-ekiden/tpl-404
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-pagehead te-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-pagehead te-404"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "te-pagehead__title"} -->
<h1 class="wp-block-heading te-pagehead__title"><?php echo esc_html( tasuki_ekiden_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "te-pagehead__lead"} -->
<p class="te-pagehead__lead"><?php echo esc_html( tasuki_ekiden_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( tasuki_ekiden_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tasuki_ekiden_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tasuki_ekiden_t( 'search_btn' ) ); ?>,"className":"te-search"} /-->

<!-- wp:buttons {"className": "te-hero__cta"} -->
<div class="wp-block-buttons te-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( tasuki_ekiden_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
