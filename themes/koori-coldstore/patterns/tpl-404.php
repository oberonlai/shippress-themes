<?php
/**
 * Title: 404
 * Slug: koori-coldstore/tpl-404
 * Categories: koori-coldstore
 * Keywords: college, apprenticeship, electrical
 * Viewport Width: 1440
 * Inserter: no
 * Description: Serif statement and a way back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-sec kc-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-sec kc-pagehead"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( koori_coldstore_t( 'nf_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"kc-h1 kc-h1--page"} -->
<h1 class="wp-block-heading kc-h1 kc-h1--page"><?php echo esc_html( koori_coldstore_t( 'nf_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kc-body"} -->
<p class="kc-body"><?php echo esc_html( koori_coldstore_t( 'nf_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"kc-btns"} -->
<div class="wp-block-buttons kc-btns"><!-- wp:button {"className":"kc-btn"} -->
<div class="wp-block-button kc-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo koori_coldstore_url( '/' ); ?>"><?php echo esc_html( koori_coldstore_t( 'home_go' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->