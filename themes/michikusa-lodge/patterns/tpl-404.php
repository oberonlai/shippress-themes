<?php
/**
 * Title: Template: not found
 * Slug: michikusa-lodge/tpl-404
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: 404 page.
 */
?>
<!-- wp:pattern {"slug":"michikusa-lodge/tpl-window"} /-->
<!-- wp:group {"tagName":"section","align":"full","className":"ml-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-pagehead"><!-- wp:group {"className":"ml-wrap ml-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-pagehead__in"><!-- wp:paragraph {"className":"ml-eyebrow"} -->
<p class="ml-eyebrow"><?php echo esc_html( michikusa_lodge_t( 'e_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ml-pagehead__h"} -->
<h1 class="wp-block-heading ml-pagehead__h"><?php echo esc_html( michikusa_lodge_t( 'e_h' ) ); ?></h1>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-pagehead__p"} -->
<p class="ml-pagehead__p"><?php echo esc_html( michikusa_lodge_t( 'e_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ml-btn"} -->
<div class="wp-block-button ml-btn"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( michikusa_lodge_t( 'e_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
