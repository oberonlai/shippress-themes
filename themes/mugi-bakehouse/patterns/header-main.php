<?php
/**
 * Title: Header: inner pages (stacked wordmark and centred menu)
 * Slug: mugi-bakehouse/header-main
 * Categories: mugi-bakehouse
 * Viewport Width: 1440
 * Inserter: no
 */
?>
<!-- wp:group {"className":"mb-header","layout":{"type":"default"}} -->
<div class="wp-block-group mb-header"><!-- wp:group {"className":"mb-brand","layout":{"type":"default"}} -->
<div class="wp-block-group mb-brand"><!-- wp:html -->
<svg class="mb-emblem" width="28" height="28" viewBox="0 0 56 56" fill="none" stroke="#6B4540" stroke-width="1.2" aria-hidden="true" focusable="false"><path d="M28 54V16"/><path d="M28 12c-3.5-3-3.5-7 0-10 3.5 3 3.5 7 0 10z"/><path d="M28 24 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 24 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 33 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 33 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 42 c-8 -1 -12 -6 -12 -11 c8 1 12 6 12 11z"/><path d="M28 42 c8 -1 12 -6 12 -11 c-8 1 -12 6 -12 11z"/><path d="M28 50c-5 0-8-3-9-6 5 0 8 2 9 6z"/><path d="M28 50c5 0 8-3 9-6-5 0-8 2-9 6z"/></svg>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"mb-brand__t"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group mb-header__bar"><!-- wp:html -->
<a class="mb-ring" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Mugi Bakehouse, home"></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"mb-nav","layout":{"type":"flex","justifyContent":"center"}} /-->

<!-- wp:html -->
<a class="mb-basket" href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/standing-orders/' ) ); ?>" aria-label="Standing orders"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false"><path d="M3.5 8.5h17l-1.6 11.5H5.1z"/><path d="M8 8.5V7a4 4 0 0 1 8 0v1.5"/></svg><?php $mb_n = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0; if ( $mb_n > 0 ) { echo '<b class="mb-basket__n">' . esc_html( $mb_n ) . '</b>'; } ?></a>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="mb-edge"><a class="mb-tab mb-tab--l" href="<?php echo esc_url( home_url( '/oven-day/' ) ); ?>" aria-label="Oven: the oven day"><span>O<br>V<br>E<br>N</span></a><a class="mb-tab mb-tab--r" href="<?php echo esc_url( home_url( '/loaves/' ) ); ?>" aria-label="Bench: the loaves"><span>B<br>E<br>N<br>C<br>H</span></a><a class="mb-fixcap mb-fixcap--l" href="<?php echo esc_url( home_url( '/loaves/' ) ); ?>"><span>B<br>R<br>E<br>A<br>D</span><b class="screen-reader-text">Bread: loaves</b></a><a class="mb-fixcap mb-fixcap--r" href="<?php echo esc_url( home_url( '/journal/' ) ); ?>"><span>N<br>O<br>T<br>E<br>S</span><b class="screen-reader-text">Notes: the journal</b></a></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
