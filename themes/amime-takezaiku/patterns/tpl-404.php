<?php
/**
 * Title: Not found
 * Slug: amime-takezaiku/tpl-404
 * Categories: amime-takezaiku
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-pagehead tk-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-pagehead tk-404"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tk-pagehead__title"} -->
<h1 class="wp-block-heading tk-pagehead__title"><?php echo esc_html( amime_takezaiku_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-pagehead__lead"} -->
<p class="tk-pagehead__lead"><?php echo esc_html( amime_takezaiku_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( amime_takezaiku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( amime_takezaiku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( amime_takezaiku_t( 'search_btn' ) ); ?>,"className":"tk-search"} /-->

<!-- wp:buttons {"className": "tk-hero__cta"} -->
<div class="wp-block-buttons tk-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( amime_takezaiku_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
