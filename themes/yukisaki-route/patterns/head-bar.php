<?php
/**
 * Title: Header: bar
 * Slug: yukisaki-route/head-bar
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Transparent top bar over the hero that becomes a white floating card after 40px: route-mark wordmark, anchor menu and the chevron-tail trial button.
 */
?>
<!-- wp:group {"className":"yr-bar","layout":{"type":"default"}} -->
<div class="wp-block-group yr-bar">
<!-- wp:html -->
<a class="yr-mark" href="/"><?php echo yukisaki_route_mark(); ?><span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></a>
<!-- /wp:html -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"yr-nav","layout":{"type":"flex","orientation":"horizontal"}} /-->

<!-- wp:buttons {"className":"yr-head__cta"} -->
<div class="wp-block-buttons yr-head__cta">
<!-- wp:button {"className":"is-style-yr-tail"} -->
<div class="wp-block-button is-style-yr-tail"><a class="wp-block-button__link wp-element-button" href="/trial/#start"><?php echo esc_html( yukisaki_route_t( 'cta' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
