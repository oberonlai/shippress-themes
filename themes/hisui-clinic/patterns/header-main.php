<?php
/**
 * Title: Header: brand, menu and booking pill
 * Slug: hisui-clinic/header-main
 * Categories: hisui-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"hc-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-header"><!-- wp:group {"className":"hc-bar","layout":{"type":"default"}} -->
<div class="wp-block-group hc-bar"><!-- wp:site-title {"level":0,"className":"hc-brand"} /-->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"deep","className":"hc-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:buttons {"className":"hc-bar__book"} -->
<div class="wp-block-buttons hc-bar__book"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( hisui_clinic_t( 'nav_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
