<?php
/**
 * Title: Not found
 * Slug: manabi-juku/tpl-404
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-pagehead mj-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-pagehead mj-404"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mj-pagehead__title"} -->
<h1 class="wp-block-heading mj-pagehead__title"><?php echo esc_html( manabi_juku_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mj-pagehead__lead"} -->
<p class="mj-pagehead__lead"><?php echo esc_html( manabi_juku_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( manabi_juku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( manabi_juku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( manabi_juku_t( 'search_btn' ) ); ?>,"className":"mj-search"} /-->

<!-- wp:buttons {"className": "mj-hero__cta"} -->
<div class="wp-block-buttons mj-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( manabi_juku_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
