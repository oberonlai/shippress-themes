<?php
/**
 * Title: Template: 404
 * Slug: asayake-lodge/tpl-404
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Not found message.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-pagehead"><!-- wp:group {"className":"al-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group al-pagehead__in"><!-- wp:paragraph {"className":"al-eyebrow"} -->
<p class="al-eyebrow"><?php echo esc_html( asayake_lodge_t( 'e_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"al-pagehead__h"} -->
<h1 class="wp-block-heading al-pagehead__h"><?php echo esc_html( asayake_lodge_t( 'e_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"al-body"} -->
<p class="al-body"><?php echo esc_html( asayake_lodge_t( 'e_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"al-btn al-btn--fill-wrap"} -->
<div class="wp-block-buttons al-btn al-btn--fill-wrap"><!-- wp:button {"className":"al-btn al-btn--fill"} -->
<div class="wp-block-button al-btn al-btn--fill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'cta_bed' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
