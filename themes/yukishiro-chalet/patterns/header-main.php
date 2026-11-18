<?php
/**
 * Title: Header: split nav
 * Slug: yukishiro-chalet/header-main
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Centred logo with a split navigation row and one outline button.
 */
?>
<!-- wp:group {"className":"yk-head","layout":{"type":"default"}} -->
<div class="wp-block-group yk-head"><!-- wp:group {"className":"yk-logo","layout":{"type":"default"}} -->
<div class="wp-block-group yk-logo"><!-- wp:html -->
<svg class="yk-mark" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 18 16 7l13 11"/><path d="M7 16v10h18V16"/><path d="M12 26v-6h8v6"/></svg>
<!-- /wp:html -->

<!-- wp:site-title {"level":0,"className":"yk-logo__t"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"yk-nav","layout":{"type":"flex","justifyContent":"space-between"}} /-->

<!-- wp:buttons {"className":"yk-head__cta"} -->
<div class="wp-block-buttons yk-head__cta"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/check-dates/"><?php echo esc_html( yukishiro_chalet_t( 'check_dates' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
