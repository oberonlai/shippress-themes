<?php
/**
 * Title: Template: journal list
 * Slug: soko-hotel/tpl-home
 * Categories: soko-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and archive templates: a black title bar, then the posts on paper.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-titlebar","layout":{"type":"default"}} -->
<section class="wp-block-group sk-titlebar"><!-- wp:heading {"level":1,"className":"sk-titlebar__h"} -->
<h1 class="wp-block-heading sk-titlebar__h"><?php echo esc_html( soko_hotel_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-listing","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-listing"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sk-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sk-post","layout":{"type":"default"}} -->
<div class="wp-block-group sk-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"12/5","className":"sk-post__img"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"sk-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sk-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"sk-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sk-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( soko_hotel_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
