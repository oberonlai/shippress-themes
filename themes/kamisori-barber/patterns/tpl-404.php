<?php
/**
 * Title: Not found
 * Slug: kamisori-barber/tpl-404
 * Categories: kamisori-barber
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-pagehead kb-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-pagehead kb-404"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kb-pagehead__title"} -->
<h1 class="wp-block-heading kb-pagehead__title"><?php echo esc_html( kamisori_barber_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-pagehead__lead"} -->
<p class="kb-pagehead__lead"><?php echo esc_html( kamisori_barber_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kamisori_barber_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kamisori_barber_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kamisori_barber_t( 'search_btn' ) ); ?>,"className":"kb-search"} /-->

<!-- wp:buttons {"className": "kb-hero__cta"} -->
<div class="wp-block-buttons kb-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kamisori_barber_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
