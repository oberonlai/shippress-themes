<?php
/**
 * Title: Home: prices
 * Slug: yukisaki-route/front-prices
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: A white shell holding the five-row price table: item and note left, price right, stacked on phones.
 */
?>
<!-- wp:group {"className":"yr-sec yr-prices","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-sec yr-prices">
<!-- wp:group {"className":"yr-wrap yr-wrap--wide","layout":{"type":"default"},"anchor":"prices"} -->
<div class="wp-block-group yr-wrap yr-wrap--wide" id="prices">
<!-- wp:group {"className":"yr-head yr-head--left","layout":{"type":"default"}} -->
<div class="wp-block-group yr-head yr-head--left">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'pr_eye' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( yukisaki_route_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"yr-head__p"} -->
<p class="yr-head__p"><?php echo esc_html( yukisaki_route_t( 'pr_p' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-pricecard","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pricecard">
<!-- wp:html -->
<table class="yr-price"><tbody><tr><th scope="row"><span class="yr-price__n"><?php echo esc_html( yukisaki_route_t( 'pr_n0' ) ); ?></span><span class="yr-price__d"><?php echo esc_html( yukisaki_route_t( 'pr_d0' ) ); ?></span></th><td class="yr-price__v"><?php echo esc_html( yukisaki_route_t( 'pr_v0' ) ); ?></td></tr><tr><th scope="row"><span class="yr-price__n"><?php echo esc_html( yukisaki_route_t( 'pr_n1' ) ); ?></span><span class="yr-price__d"><?php echo esc_html( yukisaki_route_t( 'pr_d1' ) ); ?></span></th><td class="yr-price__v"><?php echo esc_html( yukisaki_route_t( 'pr_v1' ) ); ?></td></tr><tr><th scope="row"><span class="yr-price__n"><?php echo esc_html( yukisaki_route_t( 'pr_n2' ) ); ?></span><span class="yr-price__d"><?php echo esc_html( yukisaki_route_t( 'pr_d2' ) ); ?></span></th><td class="yr-price__v"><?php echo esc_html( yukisaki_route_t( 'pr_v2' ) ); ?></td></tr><tr><th scope="row"><span class="yr-price__n"><?php echo esc_html( yukisaki_route_t( 'pr_n3' ) ); ?></span><span class="yr-price__d"><?php echo esc_html( yukisaki_route_t( 'pr_d3' ) ); ?></span></th><td class="yr-price__v"><?php echo esc_html( yukisaki_route_t( 'pr_v3' ) ); ?></td></tr><tr><th scope="row"><span class="yr-price__n"><?php echo esc_html( yukisaki_route_t( 'pr_n4' ) ); ?></span><span class="yr-price__d"><?php echo esc_html( yukisaki_route_t( 'pr_d4' ) ); ?></span></th><td class="yr-price__v"><?php echo esc_html( yukisaki_route_t( 'pr_v4' ) ); ?></td></tr></tbody></table>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"yr-note-line"} -->
<p class="yr-note-line"><?php echo esc_html( yukisaki_route_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
