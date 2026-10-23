<?php
/**
 * Title: Header: wordmark, menu and survey button
 * Slug: daichi-landscapes/header-main
 * Categories: daichi-landscapes
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"dl-header","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull dl-header">
<!-- wp:group {"className":"dl-header__in","layout":{"type":"default"}} -->
<div class="wp-block-group dl-header__in">
<!-- wp:paragraph {"className":"dl-logo"} -->
<p class="dl-logo"><a href="/">Daichi Landscapes</a></p>
<!-- /wp:paragraph -->
<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"white","overlayTextColor":"ink","icon":"menu","className":"dl-nav","layout":{"type":"flex","justifyContent":"right"}} /-->
<!-- wp:buttons {"className":"dl-btns dl-btns--head"} -->
<div class="wp-block-buttons dl-btns dl-btns--head"><!-- wp:button {"className":"dl-btn"} -->
<div class="wp-block-button dl-btn"><a class="wp-block-button__link wp-element-button" href="#contact"><?php echo esc_html( daichi_landscapes_t( 'hd_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
