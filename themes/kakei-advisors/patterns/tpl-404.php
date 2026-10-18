<?php
/**
 * Title: Not found
 * Slug: kakei-advisors/tpl-404
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-pagehead ka-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-pagehead ka-404"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "ka-pagehead__title"} -->
<h1 class="wp-block-heading ka-pagehead__title"><?php echo esc_html( kakei_advisors_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "ka-pagehead__lead"} -->
<p class="ka-pagehead__lead"><?php echo esc_html( kakei_advisors_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( kakei_advisors_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kakei_advisors_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kakei_advisors_t( 'search_btn' ) ); ?>,"className":"ka-search"} /-->

<!-- wp:buttons {"className": "ka-hero__cta"} -->
<div class="wp-block-buttons ka-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( kakei_advisors_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
