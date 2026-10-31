<?php
/**
 * Title: Template: tpl-head-search
 * Slug: yukisaki-route/tpl-head-search
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Dark band above search results.
 */
?>
<!-- wp:group {"className":"yr-pagehead yr-pagehead--plain","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-pagehead yr-pagehead--plain">
<!-- wp:group {"className":"yr-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yr-pagehead__in">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'ts_eye' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"yr-pagehead__h1"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
