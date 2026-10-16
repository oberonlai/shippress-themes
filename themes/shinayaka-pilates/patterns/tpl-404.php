<?php
/**
 * Title: Not found
 * Slug: shinayaka-pilates/tpl-404
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-pagehead sp-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-pagehead sp-404"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sp-pagehead__title"} -->
<h1 class="wp-block-heading sp-pagehead__title"><?php echo esc_html( shinayaka_pilates_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sp-pagehead__lead"} -->
<p class="sp-pagehead__lead"><?php echo esc_html( shinayaka_pilates_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( shinayaka_pilates_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( shinayaka_pilates_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( shinayaka_pilates_t( 'search_btn' ) ); ?>,"className":"sp-search"} /-->

<!-- wp:buttons {"className": "sp-hero__cta"} -->
<div class="wp-block-buttons sp-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( shinayaka_pilates_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
