<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: naru-clinic/header-main
 * Categories: naru-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"nc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nc-header"><!-- wp:group {"className":"nc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group nc-bar"><!-- wp:group {"className":"nc-brand","layout":{"type":"default"}} -->
<div class="wp-block-group nc-brand"><!-- wp:site-title {"level":0,"className":"nc-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"nc-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<div class="nc-bar__cta"><a class="nc-phone" href="tel:+002044107720" aria-label="<?php echo esc_attr( naru_clinic_t( 'a3fc2c4f1' ) ); ?>"><svg viewBox="0 0 16 16" width="18" height="18" aria-hidden="true"><path d="M3.500 2.500l2 .5.8 2.600-1.300 1a8 8 0 0 0 3.400 3.400l1-1.300 2.600.8.5 2c-.5 1.500-1.800 2-3.500 1.500C6 12 3 9 2 6c-.5-1.700 0-3 1.500-3.500z" fill="#fff"/></svg></a><a class="nc-pill nc-pill--s" href="/contact/"><?php echo wp_kses_post( naru_clinic_t( 'k2b1f94ef' ) ); ?></a></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
