<?php
/**
 * Title: Header
 * Slug: tabiji-clinic/head-main
 * Categories: tabiji-clinic
 * Keywords: clinic, travel, vaccination
 * Viewport Width: 1440
 * Description: Header band: pennant mark and wordmark, notice row, navigation, outline and dark pills.
 */
?>
<!-- wp:group {"align":"full","className":"tc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull tc-header"><!-- wp:group {"className":"tc-header__in","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group tc-header__in"><!-- wp:group {"className":"tc-brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-brand"><!-- wp:html -->
<svg class="tc-logo" width="58" height="36" viewBox="0 0 58 36" role="img" aria-label="Tabiji Clinic" xmlns="http://www.w3.org/2000/svg"><path fill="#0000F9" d="M0 0H58L50 8H0ZM0 14H46L38 22H0ZM0 28H34L26 36H0Z"/></svg>
<!-- /wp:html --><!-- wp:group {"className":"tc-brand__text","layout":{"type":"default"}} -->
<div class="wp-block-group tc-brand__text"><!-- wp:site-title {"level":0,"className":"tc-brand__title"} /--><!-- wp:paragraph {"className":"tc-brand__sub"} -->
<p class="tc-brand__sub"><?php echo esc_html( tabiji_clinic_t( 'brand_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group tc-header__right"><!-- wp:group {"className":"tc-notice","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-notice"><!-- wp:paragraph {"className":"tc-notice__pill"} -->
<p class="tc-notice__pill"><?php echo esc_html( tabiji_clinic_t( 'notice' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"tc-notice__q"} -->
<div class="wp-block-query tc-notice__q"><!-- wp:post-template -->
<!-- wp:post-date {"format":"M j, Y","className":"tc-notice__date"} /-->
<!-- wp:post-title {"level":0,"isLink":true,"className":"tc-notice__title"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --><!-- wp:group {"className":"tc-header__nav","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tc-header__nav"><!-- wp:navigation {"overlayMenu":"mobile","className":"tc-nav","layout":{"type":"flex","orientation":"horizontal"}} /--><!-- wp:buttons {"className":"tc-pills","layout":{"type":"flex"}} -->
<div class="wp-block-buttons tc-pills"><!-- wp:button {"className":"is-style-outline tc-pill tc-pill--call"} -->
<div class="wp-block-button is-style-outline tc-pill tc-pill--call"><a class="wp-block-button__link wp-element-button" href="tel:6045550142"><?php echo esc_html( tabiji_clinic_t( 'call' ) ); ?></a></div>
<!-- /wp:button --><!-- wp:button {"className":"tc-pill tc-pill--book"} -->
<div class="wp-block-button tc-pill tc-pill--book"><a class="wp-block-button__link wp-element-button" href="/appointment/"><?php echo esc_html( tabiji_clinic_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
