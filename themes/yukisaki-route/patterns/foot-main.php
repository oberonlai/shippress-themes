<?php
/**
 * Title: Footer: details
 * Slug: yukisaki-route/foot-main
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Dark footer: route-mark wordmark, address, support hours, email and the page links.
 */
?>
<!-- wp:group {"className":"yr-foot","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-foot">
<!-- wp:group {"className":"yr-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yr-wrap">
<!-- wp:html -->
<div class="yr-foot__cols"><div class="yr-foot__brand"><p class="yr-foot__mark"><?php echo yukisaki_route_mark(); ?><span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></p><p class="yr-foot__tag"><?php echo esc_html( yukisaki_route_t( 'foot_tag' ) ); ?></p></div><div class="yr-foot__info"><p><?php echo esc_html( yukisaki_route_t( 'foot_addr' ) ); ?></p><p><?php echo esc_html( yukisaki_route_t( 'foot_hours' ) ); ?><br><a href="mailto:hello@yukisakiroute.example">hello@yukisakiroute.example</a></p></div><ul class="yr-foot__menu"><li><a href="/how-it-works/"><?php echo esc_html( yukisaki_route_t( 'fm_0' ) ); ?></a></li><li><a href="/round-sheet/"><?php echo esc_html( yukisaki_route_t( 'fm_1' ) ); ?></a></li><li><a href="/pricing/"><?php echo esc_html( yukisaki_route_t( 'fm_2' ) ); ?></a></li><li><a href="/stories/"><?php echo esc_html( yukisaki_route_t( 'fm_3' ) ); ?></a></li><li><a href="/about/"><?php echo esc_html( yukisaki_route_t( 'fm_4' ) ); ?></a></li><li><a href="/faq/"><?php echo esc_html( yukisaki_route_t( 'fm_5' ) ); ?></a></li><li><a href="/field-notes/"><?php echo esc_html( yukisaki_route_t( 'fm_6' ) ); ?></a></li><li><a href="/contact/"><?php echo esc_html( yukisaki_route_t( 'fm_7' ) ); ?></a></li><li><a href="/waitlist/"><?php echo esc_html( yukisaki_route_t( 'fm_8' ) ); ?></a></li><li><a href="/privacy/"><?php echo esc_html( yukisaki_route_t( 'fm_9' ) ); ?></a></li><li><a href="/terms/"><?php echo esc_html( yukisaki_route_t( 'fm_10' ) ); ?></a></li></ul></div><p class="yr-foot__note"><?php echo esc_html( yukisaki_route_t( 'foot_note' ) ); ?> <a href="#top"><?php echo esc_html( yukisaki_route_t( 'foot_top' ) ); ?></a></p>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
