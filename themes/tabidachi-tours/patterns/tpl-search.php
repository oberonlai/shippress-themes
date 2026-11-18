<?php
/**
 * Title: Template: search results
 * Slug: tabidachi-tours/tpl-search
 * Categories: tabidachi-tours
 * Inserter: no
 * Viewport Width: 1440
 * Description: Template body.
 */
?>
<!-- wp:group {"className":"tt-main","tagName":"main","layout":{"type":"default"},"align":"full"} -->
<main class="wp-block-group alignfull tt-main"><!-- wp:group {"className":"tt-sec tt-listhead","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-listhead"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:paragraph {"className":"tt-label"} -->
<p class="tt-label">Tabidachi Study Tours</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"tt-page-h"} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tt-sec tt-listbody","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull tt-sec tt-listbody"><!-- wp:group {"className":"tt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group tt-wrap"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"tt-loop"} -->
<div class="wp-block-query tt-loop"><!-- wp:post-template {"className":"tt-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"tt-pcard","layout":{"type":"default"}} -->
<div class="wp-block-group tt-pcard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.56","className":"tt-pcard__img"} /-->

<!-- wp:post-terms {"term":"category","className":"tt-pcard__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tt-pcard__t"} /-->

<!-- wp:post-date {"className":"tt-pcard__d"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tt-pager-q"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>No stories here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
