<?php
/**
 * Title: Not found
 * Slug: kanna-komuten/tpl-404
 * Categories: kanna-komuten
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-pagehead kn-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-pagehead kn-404"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kn-pagehead__title"} -->
<h1 class="wp-block-heading kn-pagehead__title"><?php echo esc_html( kanna_komuten_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-pagehead__lead"} -->
<p class="kn-pagehead__lead"><?php echo esc_html( kanna_komuten_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kanna_komuten_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kanna_komuten_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kanna_komuten_t( 'search_btn' ) ); ?>,"className":"kn-search"} /-->

<!-- wp:buttons {"className": "kn-hero__cta"} -->
<div class="wp-block-buttons kn-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kanna_komuten_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
