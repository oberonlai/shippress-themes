<?php
/**
 * Title: Template: archive
 * Slug: kirinuki-studio/tpl-archive
 * Categories: kirinuki-studio
 * Inserter: no
 * Viewport Width: 1440
 * Description: Mist page head and a three-column list of posts.
 */
?>
<!-- wp:group {"tagName":"main","className":"kr-main","layout":{"type":"default"}} -->
<main class="wp-block-group kr-main"><!-- wp:group {"tagName":"section","align":"full","className":"kr-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-pagehead"><!-- wp:query-title {"type":"archive","level":1,"className":"kr-pagehead__h"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kr-sec kr-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kr-sec kr-sec--ground"><!-- wp:group {"className":"kr-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-wrap"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kr-jr"} -->
<div class="wp-block-query kr-jr"><!-- wp:post-template {"className":"kr-jr__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"kr-jr__img kr-chamfer"} /-->
<!-- wp:post-date {"format":"M Y","className":"kr-jr__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"kr-jr__t"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
