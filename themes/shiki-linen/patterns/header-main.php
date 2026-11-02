<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: shiki-linen/header-main
 * Categories: shiki-linen
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"sl-header","layout":{"type":"default"}} -->
<div class="wp-block-group sl-header"><!-- wp:group {"className":"sl-bar","layout":{"type":"default"}} -->
<div class="wp-block-group sl-bar"><!-- wp:navigation {"overlayMenu":"mobile","className":"sl-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:group {"className":"sl-brand","layout":{"type":"default"}} -->
<div class="wp-block-group sl-brand"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sl-actions","layout":{"type":"default"}} -->
<div class="wp-block-group sl-actions"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/product/swatch-set/"><?php echo wp_kses_post( shiki_linen_t( 'k8b63bb3e' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<a class="sl-cart" href="/cart/" aria-label="<?php echo esc_attr( shiki_linen_t( 'aa85eba4c' ) ); ?>"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 8h14l-1.2 11H6.2z"/><path d="M9 8V6.5a3 3 0 0 1 6 0V8"/></svg><span class="sl-cart__n">0</span></a>
<!-- /wp:html -->

<!-- wp:html -->
<div class="sl-lang" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
