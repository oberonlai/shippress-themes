<?php
/**
 * Title: Header bar
 * Slug: azuke-finance/head-bar
 * Categories: azuke-finance
 * Keywords: invoice funding, factoring, landing
 * Viewport Width: 1440
 * Description: Wordmark, centred anchor menu, language pill and the Apply pill.
 */
?>
<!-- wp:group {"align":"full","className":"az-bar","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull az-bar"><!-- wp:site-title {"level":0,"className":"az-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"az-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"az-bar__right","layout":{"type":"default"}} -->
<div class="wp-block-group az-bar__right"><!-- wp:paragraph {"className":"az-langpill"} -->
<p class="az-langpill"><?php echo esc_html( azuke_finance_t( 'lang_pill' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"az-pill az-pill--sm-row"} -->
<div class="wp-block-buttons az-pill az-pill--sm-row"><!-- wp:button {"className":"az-pill az-pill--sm"} -->
<div class="wp-block-button az-pill az-pill--sm"><a class="wp-block-button__link wp-element-button" href="/apply/"><?php echo esc_html( azuke_finance_t( 'apply_short' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
