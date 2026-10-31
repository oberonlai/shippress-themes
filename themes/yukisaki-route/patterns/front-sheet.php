<?php
/**
 * Title: Home: round sheet band
 * Slug: yukisaki-route/front-sheet
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of a printed round sheet on a van dashboard, white text on the left and three short facts.
 */
?>
<!-- wp:group {"className":"yr-band sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-band sp-parallax">
<!-- wp:html -->
<div class="sp-parallax__layer yr-band__layer"><img src="<?php echo yukisaki_route_img( 'p05-sheet-dashboard.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P05' ) ); ?>" loading="lazy" decoding="async"/></div>
<span class="yr-band__shade" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-band__fg","layout":{"type":"default"},"anchor":"sheet"} -->
<div class="wp-block-group yr-band__fg" id="sheet">
<!-- wp:paragraph {"className":"yr-eyebrow yr-eyebrow--light"} -->
<p class="yr-eyebrow yr-eyebrow--light"><?php echo esc_html( yukisaki_route_t( 'sheet_eye' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"yr-band__h"} -->
<h2 class="wp-block-heading yr-band__h"><?php echo esc_html( yukisaki_route_t( 'sheet_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yr-band__p"} -->
<p class="yr-band__p"><?php echo esc_html( yukisaki_route_t( 'sheet_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="yr-facts"><div class="yr-fact"><strong><?php echo esc_html( yukisaki_route_t( 'sheet_f0' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'sheet_d0' ) ); ?></span></div><div class="yr-fact"><strong><?php echo esc_html( yukisaki_route_t( 'sheet_f1' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'sheet_d1' ) ); ?></span></div><div class="yr-fact"><strong><?php echo esc_html( yukisaki_route_t( 'sheet_f2' ) ); ?></strong><span><?php echo esc_html( yukisaki_route_t( 'sheet_d2' ) ); ?></span></div></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
