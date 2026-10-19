<?php
/**
 * Title: Not found
 * Slug: hanamizuki-dental/tpl-404
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Inserter: no
 * Description: The page-not-found message with a search box.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-pagehead hd-404", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-pagehead hd-404"><!-- wp:paragraph {"className": "hd-eyebrow"} -->
<p class="hd-eyebrow">404</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hd-pagehead__title"} -->
<h1 class="wp-block-heading hd-pagehead__title"><?php echo esc_html( hanamizuki_dental_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hd-pagehead__lead"} -->
<p class="hd-pagehead__lead"><?php echo esc_html( hanamizuki_dental_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":<?php echo wp_json_encode( hanamizuki_dental_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hanamizuki_dental_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hanamizuki_dental_t( 'search_btn' ) ); ?>,"className":"hd-search"} /-->

<!-- wp:buttons {"className": "hd-hero__cta"} -->
<div class="wp-block-buttons hd-hero__cta"><!-- wp:button {"className": "is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( hanamizuki_dental_t( 'nf_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
