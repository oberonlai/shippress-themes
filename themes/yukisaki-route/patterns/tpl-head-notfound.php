<?php
/**
 * Title: Template: tpl-head-notfound
 * Slug: yukisaki-route/tpl-head-notfound
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Dark band on the 404 page.
 */
?>
<!-- wp:group {"className":"yr-pagehead yr-pagehead--plain","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-pagehead yr-pagehead--plain">
<!-- wp:group {"className":"yr-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagehead__in">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'tn_eye' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yr-pagehead__h1"} -->
<h1 class="wp-block-heading yr-pagehead__h1"><?php echo esc_html( yukisaki_route_t( 'tn_h' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
