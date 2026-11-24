<?php
/**
 * Title: Header: one menu
 * Slug: asayake-lodge/header-main
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Description: White 64px header with a hairline, the line-mark wordmark, the one overlay menu and the single call to action.
 */
?>
<!-- wp:group {"className":"al-head","layout":{"type":"default"}} -->
<div class="wp-block-group al-head"><!-- wp:group {"className":"al-head__in","layout":{"type":"default"}} -->
<div class="wp-block-group al-head__in"><!-- wp:group {"className":"al-brand","layout":{"type":"default"}} -->
<div class="wp-block-group al-brand"><!-- wp:html -->
<svg class="al-mark" viewBox="0 0 48 48" width="28" height="28" aria-hidden="true" focusable="false"><path d="M6 36h36M10 36V26L24 16l14 10v10M14 26l10-8 10 8M16 20a8 8 0 0 1 16 0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"al-wordmark"} -->
<p class="al-wordmark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'logo_name' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:navigation {"overlayMenu":"mobile","icon":"handle","className":"al-nav","layout":{"type":"flex","justifyContent":"right"}} /-->
<!-- wp:buttons {"className":"al-btn al-btn--head-wrap"} -->
<div class="wp-block-buttons al-btn al-btn--head-wrap"><!-- wp:button {"className":"al-btn al-btn--head"} -->
<div class="wp-block-button al-btn al-btn--head"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( asayake_lodge_t( 'cta_bed' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
