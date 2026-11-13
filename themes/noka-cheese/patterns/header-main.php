<?php
/**
 * Title: Header: split menu
 * Slug: noka-cheese/header-main
 * Categories: noka-cheese
 * Inserter: no
 * Viewport Width: 1440
 * Description: Sticky header: double-line glyph, split menu around the centred wordmark, cart and reserve pill.
 */
?>
<!-- wp:group {"className":"nk-bar","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull nk-bar"><!-- wp:group {"className":"nk-bar__in","align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide nk-bar__in"><!-- wp:html -->
<span class="nk-glyph" aria-hidden="true"><svg width="50" height="14" viewBox="0 0 50 14" focusable="false"><path d="M0 2.5H50M0 11.5H50" stroke="#FFFFFF" stroke-width="1.5"/></svg></span>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"nk-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<a class="nk-brand" href="/"><?php echo wp_kses_post( noka_cheese_t( 'brand_name' ) ); ?></a>
<!-- /wp:html -->

<!-- wp:group {"className":"nk-bar__end","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group nk-bar__end"><?php if ( function_exists( 'pll_the_languages' ) ) : ?>
<!-- wp:html -->
<ul class="nk-lang"><?php pll_the_languages( array( 'show_names' => 0, 'show_flags' => 0, 'display_names_as' => 'slug', 'hide_current' => 0 ) ); ?></ul>
<!-- /wp:html -->
<?php endif; ?><?php if ( class_exists( 'WooCommerce' ) ) : ?>
<!-- wp:woocommerce/mini-cart {"className":"nk-cart"} /-->
<?php endif; ?>

<!-- wp:buttons {"className":"nk-head-cta"} -->
<div class="wp-block-buttons nk-head-cta"><!-- wp:button {"className":"nk-pill"} -->
<div class="wp-block-button nk-pill"><a class="wp-block-button__link wp-element-button" href="/boards/"><?php echo wp_kses_post( noka_cheese_t( 'cta_reserve' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
