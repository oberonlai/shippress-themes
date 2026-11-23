<?php
/**
 * Title: Template: not found
 * Slug: otonoha-acoustics/tpl-404
 * Categories: otonoha-acoustics
 * Viewport Width: 1440
 * Inserter: false
 * Description: Not-found message on the white sheet with a link back.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"oto-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull oto-pagehead"><!-- wp:group {"className":"oto-pagehead__band","layout":{"type":"default"}} -->
<div class="wp-block-group oto-pagehead__band"><!-- wp:heading {"level":1,"className":"oto-pagehead__h"} -->
<h1 class="wp-block-heading oto-pagehead__h">404</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"className":"oto-sheet","layout":{"type":"default"}} -->
<div class="wp-block-group oto-sheet"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( otonoha_acoustics_t( 'nf_h' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph -->
<p><?php echo esc_html( otonoha_acoustics_t( 'nf_p' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"oto-link"} -->
<p class="oto-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( otonoha_acoustics_t( 'nf_link' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
