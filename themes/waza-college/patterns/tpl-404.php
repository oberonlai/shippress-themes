<?php
/**
 * Title: Not found
 * Slug: waza-college/tpl-404
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-pagehead wz-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-pagehead wz-404"><!-- wp:paragraph {"className": "wz-eyebrow"} -->
<p class="wz-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "wz-pagehead__title"} -->
<h1 class="wp-block-heading wz-pagehead__title"><?php echo esc_html( waza_college_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "wz-pagehead__lead"} -->
<p class="wz-pagehead__lead"><?php echo esc_html( waza_college_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( waza_college_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( waza_college_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( waza_college_t( 'search_btn' ) ); ?>,"className":"wz-search"} /-->

<!-- wp:buttons {"className": "wz-hero__cta"} -->
<div class="wp-block-buttons wz-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( waza_college_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
