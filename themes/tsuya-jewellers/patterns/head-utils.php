<?php
/**
 * Title: Header utilities
 * Slug: tsuya-jewellers/head-utils
 * Categories: tsuya-jewellers
 * Keywords: jeweller, jewellery, store
 * Viewport Width: 1440
 * Description: Search, account and cart count for the split header.
 */
?>
<!-- wp:group {"className":"ts-utils","layout":{"type":"default"}} -->
<div class="wp-block-group ts-utils"><!-- wp:html -->
<p><a href="<?php echo esc_url( home_url( '/?s=' ) ); ?>" aria-label="Search"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false"><circle cx="6.5" cy="6.5" r="5.5" stroke="currentColor"/><path d="M10.5 10.5L15.5 15.5" stroke="currentColor"/></svg></a></p>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( tsuya_jewellers_shop_url( '/my-account/', '/visit/' ) ); ?>">Account</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( tsuya_jewellers_shop_url( '/cart/' ) ); ?>">Cart (<?php echo (int) tsuya_jewellers_cart_count(); ?>)</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
