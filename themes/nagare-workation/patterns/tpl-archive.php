<?php
/**
 * Title: Template: archive
 * Slug: nagare-workation/tpl-archive
 * Categories: nagare-workation
 * Inserter: no
 * Viewport Width: 1440
 * Description: Archive heading and a three-column list of posts.
 */
?>
<!-- wp:group {"tagName":"main","className":"nw-main","layout":{"type":"default"}} -->
<main class="wp-block-group nw-main"><!-- wp:group {"tagName":"section","align":"full","className":"nw-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-pagehead"><!-- wp:query-title {"type":"archive","level":1,"className":"nw-pagehead__h"} /--></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"nw-sec nw-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-sec nw-sec--ground"><!-- wp:group {"className":"nw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group nw-wrap"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"nw-jr"} -->
<div class="wp-block-query nw-jr"><!-- wp:post-template {"className":"nw-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nw-jr__img"} /-->
<!-- wp:post-date {"format":"M Y","className":"nw-jr__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"nw-jr__t"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
