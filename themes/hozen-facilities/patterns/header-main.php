<?php
/**
 * Title: Header: floating card
 * Slug: hozen-facilities/header-main
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: White floating header card: wordmark and place line at the left, the menu, a dark Prices pill and a blue Report a fault pill at the right.
 */
?>
<!-- wp:group {"align":"full","className":"hz-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-header">
<!-- wp:group {"className":"hz-card","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group hz-card">
<!-- wp:group {"className":"hz-brand","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group hz-brand">
<!-- wp:paragraph {"className":"hz-brand__name"} -->
<p class="hz-brand__name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-brand__micro"} -->
<p class="hz-brand__micro"><?php echo esc_html( hozen_facilities_t( 'micro' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"always","className":"hz-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"hz-pills"} -->
<div class="wp-block-buttons hz-pills">
<!-- wp:button {"className":"hz-pill hz-pill--dark"} -->
<div class="wp-block-button hz-pill hz-pill--dark"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'pill_prices' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"hz-pill hz-pill--blue hz-pill--long"} -->
<div class="wp-block-button hz-pill hz-pill--blue hz-pill--long"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/call-outs/#report' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'pill_fault' ) ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"hz-pill hz-pill--blue hz-pill--short"} -->
<div class="wp-block-button hz-pill hz-pill--blue hz-pill--short"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/call-outs/#report' ) ); ?>"><?php echo esc_html( hozen_facilities_t( 'pill_fault_s' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
