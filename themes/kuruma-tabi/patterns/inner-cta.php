<?php
/**
 * Title: Inner pages: one request band
 * Slug: kuruma-tabi/inner-cta
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Closing band for inner pages: emblem heading and the single itinerary request button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--wash kt-cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kt-sec kt-sec--wash kt-cta"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'cta_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'cta_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"kt-btns kt-btns--c","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons kt-btns kt-btns--c"><!-- wp:button {"className":"kt-btn"} -->
<div class="wp-block-button kt-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/request/' ) ); ?>"><?php echo esc_html( kuruma_tabi_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
