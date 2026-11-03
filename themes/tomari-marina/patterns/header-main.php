<?php
/**
 * Title: Header: brand, menu and call buttons
 * Slug: tomari-marina/header-main
 * Categories: tomari-marina
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"tm-header","layout":{"type":"default"}} -->
<div class="wp-block-group tm-header"><!-- wp:group {"className":"tm-header__bar","layout":{"type":"default"}} -->
<div class="wp-block-group tm-header__bar"><!-- wp:navigation {"overlayMenu":"mobile","className":"tm-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"},"style":{"spacing":{"blockGap":"1.25rem"}}} /-->

<!-- wp:group {"className":"tm-brand","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group tm-brand"><!-- wp:html -->
<svg class="tm-pennant" width="22" height="18" viewBox="0 0 48 38" aria-hidden="true" focusable="false"><path d="M2 0h4v38H2z M6 3l40 11L6 25z" fill="#C30D23"/></svg>
<!-- /wp:html -->
<!-- wp:site-title {"level":0,"className":"tm-brand__title"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"tm-pills","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons tm-pills"><!-- wp:button {"className":"is-style-outline tm-pill"} -->
<div class="wp-block-button is-style-outline tm-pill"><a class="wp-block-button__link wp-element-button" href="/visitors/"><?php echo wp_kses_post( tomari_marina_t( 'k62b0f36e' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"is-style-outline tm-pill"} -->
<div class="wp-block-button is-style-outline tm-pill"><a class="wp-block-button__link wp-element-button" href="/season-fees/"><?php echo wp_kses_post( tomari_marina_t( 'k1f7353ec' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
