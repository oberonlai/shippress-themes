<?php
/**
 * Title: Template: home
 * Slug: yukisaki-route/tpl-home
 * Categories: yukisaki-route
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"yr-main yr-main--text","layout":{"type":"constrained"}} -->
<main class="wp-block-group yr-main yr-main--text"><!-- wp:pattern {"slug":"yukisaki-route/tpl-head-posts"} /-->

<!-- wp:group {"className":"yr-textwrap","layout":{"type":"constrained"}} -->
<div class="wp-block-group yr-textwrap"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"yr-posts"} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"yr-post-img"} /-->

<!-- wp:post-date {"format":"Y-m-d","className":"yr-post-date"} /-->

<!-- wp:post-title {"isLink":true,"level":2} /-->

<!-- wp:post-excerpt {"moreText":"→"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( yukisaki_route_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->