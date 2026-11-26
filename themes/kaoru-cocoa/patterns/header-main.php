<?php
/**
 * Title: Header: centred menu with order circle
 * Slug: kaoru-cocoa/header-main
 * Categories: kaoru-cocoa
 * Inserter: no
 * Viewport Width: 1440
 * Description: White sticky header: site title left, one centred menu, a 36 px circle order button right.
 */
?>
<!-- wp:group {"align":"full","className":"kc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-header"><!-- wp:site-title {"level":0,"className":"kc-sitetitle"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"kc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->

<!-- wp:group {"className":"kc-circle-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-circle-wrap"><!-- wp:html -->
<a class="kc-circle" href="/cake-orders/"><span class="screen-reader-text">Order a cake</span><svg class="kc-bag" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false" fill="none" stroke="#333333" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 8h14l-1 12H6L5 8z"/><path d="M9 8V6.5a3 3 0 0 1 6 0V8"/></svg></a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
