<?php
/**
 * Title: Not found
 * Slug: kizuki-construction/tpl-404
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-pagehead kz-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-pagehead kz-404"><!-- wp:paragraph {"className": "kz-eyebrow"} -->
<p class="kz-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kz-pagehead__title"} -->
<h1 class="wp-block-heading kz-pagehead__title"><?php echo esc_html( kizuki_construction_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kz-pagehead__lead"} -->
<p class="kz-pagehead__lead"><?php echo esc_html( kizuki_construction_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kizuki_construction_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kizuki_construction_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kizuki_construction_t( 'search_btn' ) ); ?>,"className":"kz-search"} /-->

<!-- wp:buttons {"className": "kz-hero__cta"} -->
<div class="wp-block-buttons kz-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kizuki_construction_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
