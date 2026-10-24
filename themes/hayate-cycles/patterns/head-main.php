<?php
/**
 * Title: Header
 * Slug: hayate-cycles/head-main
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: Wordmark with a Ghent micro-line at the left; the menu and the Book a service pill at the right.
 */
?>
<!-- wp:group {"align":"full","className":"hc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-header">
<!-- wp:group {"className":"hc-brand","layout":{"type":"default"}} -->
<div class="wp-block-group hc-brand">
<!-- wp:paragraph {"className":"hc-brand__name"} -->
<p class="hc-brand__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-brand__micro"} -->
<p class="hc-brand__micro"><?php echo esc_html( hayate_cycles_t( 'micro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","className":"hc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<?php $hc_cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/shop/' ); $hc_cart_n = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0; ?><!-- wp:paragraph {"className":"hc-cartlink"} -->
<p class="hc-cartlink"><a href="<?php echo esc_url( $hc_cart_url ); ?>"><?php echo esc_html( hayate_cycles_t( 'nav_cart' ) ); ?><?php echo $hc_cart_n ? ' (' . (int) $hc_cart_n . ')' : ''; ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill hc-pill--head"} -->
<div class="wp-block-button hc-pill hc-pill--head"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/#book' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'nav_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
