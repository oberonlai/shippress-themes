<?php
/**
 * Title: Header: utility strip and centred logo
 * Slug: enishi-catering/header-main
 * Categories: enishi-catering
 * Description: Utility strip with the notice and an enquiry link, then the centred ENISHI wordmark with the menu split to either side.
 * Viewport Width: 1440
 */
$t = 'enishi_catering_t';
?>
<!-- wp:group {"align":"full","className":"enc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull enc-header"><!-- wp:group {"className":"enc-util","layout":{"type":"default"}} -->
<div class="wp-block-group enc-util"><!-- wp:paragraph {"className":"enc-util__note"} -->
<p class="enc-util__note"><?php echo esc_html( $t( 'util_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"enc-util__cta"} -->
<p class="enc-util__cta"><a href="/contact/"><?php echo esc_html( $t( 'util_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"enc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group enc-bar"><!-- wp:paragraph {"className":"enc-logo"} -->
<p class="enc-logo"><a href="/"><?php echo esc_html( $t( 'logo' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"enc-nav","layout":{"type":"flex","justifyContent":"space-between"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
