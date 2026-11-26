<?php
/**
 * Title: Template: search
 * Slug: kaoru-cocoa/tpl-search
 * Categories: kaoru-cocoa
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"kc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-pagehead"><!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label">Search</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"kc-word kc-word--page"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"kc-sec kc-sec--in","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-sec kc-sec--in"><!-- wp:group {"className":"kc-col","layout":{"type":"default"}} -->
<div class="wp-block-group kc-col"><!-- wp:search {"label":"Search","buttonText":"Search"} /-->

<!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"kc-rows","layout":{"type":"default"}} -->
<!-- wp:group {"className":"kc-row","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"100px","height":"100px","className":"kc-row__img"} /-->

<!-- wp:group {"className":"kc-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-row__text"><!-- wp:post-terms {"term":"category","className":"kc-meta"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-story__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"kc-story__note"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
