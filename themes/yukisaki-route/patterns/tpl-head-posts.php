<?php
/**
 * Title: Template: tpl-head-posts
 * Slug: yukisaki-route/tpl-head-posts
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Dim photograph band above the post list.
 */
?>
<!-- wp:group {"className":"yr-pagehead sp-parallax","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-pagehead sp-parallax">
<!-- wp:html -->
<div class="sp-parallax__layer yr-pagehead__bg" aria-hidden="true"><img src="<?php echo yukisaki_route_img( 'p04-canopy.webp' ); ?>" alt="" loading="eager" decoding="async"/></div>
<span class="yr-pagehead__shade" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:group {"className":"yr-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagehead__in">
<!-- wp:paragraph {"className":"yr-eyebrow yr-eyebrow--light"} -->
<p class="yr-eyebrow yr-eyebrow--light"><?php echo esc_html( yukisaki_route_t( 'tp_eye' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-pagehead__h1"} -->
<h1 class="wp-block-heading yr-pagehead__h1"><?php echo esc_html( yukisaki_route_t( 'tp_h' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
