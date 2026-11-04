<?php
/**
 * Title: Header: home (transparent over the photograph)
 * Slug: mugi-bakehouse/header-home
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 * Inserter: no
 */
?>
<!-- wp:group {"className":"mb-header mb-header\u002d\u002dhome","layout":{"type":"default"}} -->
<div class="wp-block-group mb-header mb-header--home"><!-- wp:group {"className":"mb-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group mb-header__bar"><!-- wp:html -->
<a class="mb-ring" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Mugi Bakehouse, home"></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mb-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:html -->
<a class="mb-basket" href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/standing-orders/' ) ); ?>" aria-label="Standing orders"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false"><path d="M3.5 8.5h17l-1.6 11.5H5.1z"/><path d="M8 8.5V7a4 4 0 0 1 8 0v1.5"/></svg><?php $mb_n = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0; if ( $mb_n > 0 ) { echo '<b class="mb-basket__n">' . esc_html( $mb_n ) . '</b>'; } ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="mb-edge"><button type="button" class="mb-tab mb-tab--l is-active" data-frame="oven" aria-pressed="true" aria-label="Oven: the peel going into the deck oven"><span>O<br>V<br>E<br>N</span></button><button type="button" class="mb-tab mb-tab--r" data-frame="bench" aria-pressed="false" aria-label="Bench: flour across the bench"><span>B<br>E<br>N<br>C<br>H</span></button><a class="mb-fixcap mb-fixcap--l" href="<?php echo esc_url( home_url( '/loaves/' ) ); ?>"><span>B<br>R<br>E<br>A<br>D</span><b class="screen-reader-text">Bread: loaves</b></a><a class="mb-fixcap mb-fixcap--r" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><span>N<br>O<br>T<br>E<br>S</span><b class="screen-reader-text">Notes: the journal</b></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
