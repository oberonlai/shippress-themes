<?php
/**
 * Title: Not found
 * Slug: hanayui-kimono/tpl-404
 * Categories: hanayui-kimono
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-pagehead hy-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-pagehead hy-404"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hy-pagehead__title"} -->
<h1 class="wp-block-heading hy-pagehead__title"><?php echo esc_html( hanayui_kimono_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-pagehead__lead"} -->
<p class="hy-pagehead__lead"><?php echo esc_html( hanayui_kimono_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hanayui_kimono_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hanayui_kimono_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hanayui_kimono_t( 'search_btn' ) ); ?>,"className":"hy-search"} /-->

<!-- wp:buttons {"className": "hy-hero__cta"} -->
<div class="wp-block-buttons hy-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hanayui_kimono_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
