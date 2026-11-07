<?php
/**
 * Title: Template: search
 * Slug: asagiri-hotel/tpl-search
 * Categories: asagiri-hotel
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"ag-wrapin","layout":{"type":"default"}} -->
<div class="wp-block-group ag-wrapin"><!-- wp:group {"className":"ag-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ag-pagehead"><!-- wp:query-title {"type":"search","level":1,"className":"ag-title"} /--></div>
<!-- /wp:group -->
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
<!-- wp:query {"queryId":2,"query":{"perPage":9,"postType":"post","inherit":true},"className":"ag-notes__q"} -->
<div class="wp-block-query ag-notes__q"><!-- wp:post-template {"className":"ag-notes__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-notes__img"} /-->
<!-- wp:post-date {"className":"ag-notes__d"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-notes__n"} /-->
<!-- wp:post-excerpt {"excerptLength":20,"className":"ag-notes__x"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
