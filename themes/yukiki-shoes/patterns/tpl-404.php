<?php
/**
 * Title: Template: 404
 * Slug: yukiki-shoes/tpl-404
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Not-found message with a link home.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"nf","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section id="nf" class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:heading {"level":1,"className":"ys-phead__h"} -->
<h1 class="wp-block-heading ys-phead__h"><?php echo esc_html( yukiki_shoes_t( 'nf_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ys-btns"} -->
<div class="wp-block-buttons ys-btns"><!-- wp:button {"className":"ys-btn"} -->
<div class="wp-block-button ys-btn"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html( yukiki_shoes_t( 'nf_back' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->