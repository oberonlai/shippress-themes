<?php
/**
 * Title: Header: top bar and anchor bar
 * Slug: shikii-mats/header-main
 * Categories: shikii-mats
 * Inserter: no
 * Viewport Width: 1440
 * Description: White top bar with the wordmark, phone and booking link, and the single teal anchor bar holding the one menu.
 */
?>
<!-- wp:group {"align":"full","className":"sm-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-header">
<!-- wp:group {"align":"full","className":"sm-top","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-top">
<!-- wp:group {"align":"wide","className":"sm-top__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sm-top__in">
<!-- wp:paragraph {"className":"sm-wordmark"} -->
<p class="sm-wordmark"><a href="/"><?php echo esc_html( shikii_mats_t( 'wordmark' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sm-top__r","layout":{"type":"default"}} -->
<div class="wp-block-group sm-top__r">
<!-- wp:paragraph {"className":"sm-phone"} -->
<p class="sm-phone"><?php echo esc_html( shikii_mats_t( 'hdr_phone' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sm-toplink"} -->
<p class="sm-toplink"><a href="/book-a-trial/"><?php echo esc_html( shikii_mats_t( 'cta' ) ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"sm-anchor","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull sm-anchor">
<!-- wp:group {"align":"wide","className":"sm-anchor__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sm-anchor__in">
<!-- wp:navigation {"overlayMenu":"never","className":"sm-nav","layout":{"type":"flex","orientation":"horizontal","flexWrap":"nowrap"}} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
