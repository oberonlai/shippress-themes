<?php
/**
 * Title: Not found
 * Slug: hoshizora-camp/tpl-404
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-pagehead hz-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-pagehead hz-404"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hz-pagehead__title"} -->
<h1 class="wp-block-heading hz-pagehead__title"><?php echo esc_html( hoshizora_camp_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hz-pagehead__lead"} -->
<p class="hz-pagehead__lead"><?php echo esc_html( hoshizora_camp_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hoshizora_camp_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hoshizora_camp_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hoshizora_camp_t( 'search_btn' ) ); ?>,"className":"hz-search"} /-->

<!-- wp:buttons {"className": "hz-hero__cta"} -->
<div class="wp-block-buttons hz-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hoshizora_camp_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
