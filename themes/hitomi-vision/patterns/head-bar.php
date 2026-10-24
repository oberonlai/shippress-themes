<?php
/**
 * Title: Header bar
 * Slug: hitomi-vision/head-bar
 * Categories: hitomi-vision
 * Inserter: no
 * Description: Lower-case wordmark at the left, the menu and an outline booking button at the right, laid over the top of the page.
 */
?>
<!-- wp:group {"align":"full","className":"hv-header","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hv-header"><!-- wp:site-title {"level":0,"className":"hv-brand"} /-->

<!-- wp:group {"className":"hv-header__right","layout":{"type":"default"}} -->
<div class="wp-block-group hv-header__right"><!-- wp:navigation {"overlayMenu":"mobile","className":"hv-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"hv-btns hv-header__cta"} -->
<div class="wp-block-buttons hv-btns hv-header__cta"><!-- wp:button {"className":"hv-btn"} -->
<div class="wp-block-button hv-btn"><a class="wp-block-button__link wp-element-button" href="/#visit"><?php echo esc_html( hitomi_vision_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
