<?php
/**
 * Title: Header: wordmark, one menu, ticker pill and request pill
 * Slug: tabidachi-tours/header-main
 * Categories: tabidachi-tours
 * Inserter: no
 * Viewport Width: 1440
 * Description: Slim white top bar: wordmark, the one top menu with a count box on Trips, an outlined ticker pill with a scrolling line and the black Request a plan pill.
 */
?>
<!-- wp:group {"className":"tt-header","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-header"><!-- wp:group {"className":"tt-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group tt-header__in"><!-- wp:html -->
<p class="tt-wordmark"><a href="/"><svg class="tt-glyph" viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="12.5" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M1 14H27" stroke="currentColor" stroke-width="1.5"/><circle cx="14" cy="14" r="3" fill="#B79B5B" stroke="currentColor"/></svg><span class="tt-wordmark__t"><b><?php echo wp_kses_post( tabidachi_tours_t( 'kea03d6d6' ) ); ?></b><i><?php echo wp_kses_post( tabidachi_tours_t( 'k1dac3917' ) ); ?></i></span></a></p>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"white","overlayTextColor":"ink","className":"tt-nav","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} /-->

<!-- wp:html -->
<div class="tt-ticker sp-marquee" role="note" aria-label="<?php echo esc_attr( tabidachi_tours_t( 'ab1a0b0d3' ) ); ?>"><span aria-hidden="false"><?php echo wp_kses_post( tabidachi_tours_t( 'k27625635' ) ); ?> </span><span aria-hidden="true"><?php echo wp_kses_post( tabidachi_tours_t( 'k27625635' ) ); ?> </span></div>
<!-- /wp:html -->

<!-- wp:buttons {"className":"tt-header__cta"} -->
<div class="wp-block-buttons tt-header__cta"><!-- wp:button {"className":"tt-blackpill"} -->
<div class="wp-block-button tt-blackpill"><a class="wp-block-button__link wp-element-button" href="/request-a-plan/"><?php echo wp_kses_post( tabidachi_tours_t( 'k5fc75c01' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
