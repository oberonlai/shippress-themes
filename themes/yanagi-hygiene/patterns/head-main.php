<?php
/**
 * Title: Header
 * Slug: yanagi-hygiene/head-main
 * Categories: yanagi-hygiene
 * Keywords: pest control, commercial, landing
 * Viewport Width: 1440
 * Description: Two-row header: willow mark and wordmark, desk hours and phone, anchor menu and the small pentagon request tab.
 */
?>
<!-- wp:group {"align":"full","className":"yh-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yh-header"><!-- wp:group {"className":"yh-header__in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group yh-header__in"><!-- wp:group {"className":"yh-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group yh-brand"><!-- wp:html -->
<svg class="yh-logo" width="26" height="26" viewBox="0 0 26 26" role="img" aria-label="<?php echo esc_attr( yh_t( 'logo_alt' ) ); ?>" xmlns="http://www.w3.org/2000/svg"><g fill="none" stroke="#449A52" stroke-width="1.8" stroke-linecap="round"><path d="M4 24C5 14 9 7 17 2"/><path d="M10 24C10 16 14 11 22 8"/><path d="M16 24C16 19 18 16 24 14"/></g></svg>
<!-- /wp:html --><!-- wp:site-title {"level":0,"className":"yh-brand__title"} /--></div>
<!-- /wp:group --><!-- wp:group {"className":"yh-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group yh-header__right"><!-- wp:paragraph {"className":"yh-util"} -->
<p class="yh-util"><span><?php echo esc_html( yh_t( 'desk' ) ); ?></span><span><a href="tel:+61390000418"><?php echo esc_html( yh_t( 'phone' ) ); ?></a></span></p>
<!-- /wp:paragraph --><!-- wp:group {"className":"yh-header__nav","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group yh-header__nav"><!-- wp:navigation {"overlayMenu":"mobile","className":"yh-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->
<?php echo yh_pent( 's', 'yh-pent--head' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
