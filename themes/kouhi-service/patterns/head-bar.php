<?php
/**
 * Title: Header: bar
 * Slug: kouhi-service/head-bar
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Sticky header: hanging utility tab, wordmark, anchor menu and the outline pill.
 */
?>
<!-- wp:group {"className":"ks-header","layout":{"type":"default"}} -->
<div class="wp-block-group ks-header"><!-- wp:html -->
<div class="ks-tab"><span class="ks-tab__lang" aria-label="<?php echo esc_attr( kouhi_service_t( 'lang_aria' ) ); ?>"><span aria-current="true">EN</span><span>&#x4E2D;&#x6587;</span><span>&#x65E5;&#x672C;&#x8A9E;</span><span>FR</span><span>DE</span></span><span class="ks-tab__hours"><?php echo esc_html( kouhi_service_t( 'hours' ) ); ?></span></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ks-bar","layout":{"type":"default"}} -->
<div class="wp-block-group ks-bar"><!-- wp:site-title {"level":0,"isLink":true,"className":"ks-mark"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","className":"ks-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:html -->
<div class="wp-block-buttons ks-head__cta"><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/#book"><span class="ks-btn-long"><?php echo esc_html( kouhi_service_t( 'cta' ) ); ?></span><span class="ks-btn-short"><?php echo esc_html( kouhi_service_t( 'cta_short' ) ); ?></span></a></div></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
