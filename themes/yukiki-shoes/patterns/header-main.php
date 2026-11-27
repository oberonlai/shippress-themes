<?php
/**
 * Title: Header: wordmark and one menu row
 * Slug: yukiki-shoes/header-main
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: A 64 px wordmark row (hours, wordmark, booking link) over a 48 px row with the single navigation block.
 */
?>
<!-- wp:group {"className":"ys-head","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull ys-head">
<!-- wp:group {"className":"ys-head__top","layout":{"type":"default"}} -->
<div class="wp-block-group ys-head__top">
<!-- wp:html -->
<p class="ys-head__l"><?php echo esc_html( yukiki_shoes_t( 'hd_left' ) ); ?></p>
<!-- /wp:html -->
<!-- wp:html -->
<a class="ys-brand" href="/"><svg class="ys-mark" width="22" height="22" viewBox="0 0 22 22" fill="none" aria-hidden="true" focusable="false"><path d="M3 15.5h16M5 15.5v-5.5c0-2 1-3.5 3-3.5h2.5l2 3h3.5c2 0 3 1 3 2.5v3.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round"/></svg><span class="ys-wordmark"><?php echo esc_html( yukiki_shoes_t( 'wordmark' ) ); ?></span></a>
<!-- /wp:html -->
<!-- wp:html -->
<a class="ys-head__r" href="/fittings/"><?php echo esc_html( yukiki_shoes_t( 'cta_book' ) ); ?></a>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"ys-head__nav","layout":{"type":"default"}} -->
<div class="wp-block-group ys-head__nav">
<!-- wp:navigation {"overlayMenu":"mobile","className":"ys-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->