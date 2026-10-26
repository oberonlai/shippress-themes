<?php
/**
 * Title: Template: journal list
 * Slug: kasane-venue/tpl-home
 * Categories: kasane-venue
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kv-main","layout":{"type":"default"}} -->
<main class="wp-block-group kv-main"><!-- wp:group {"className":"kv-page kv-journal","layout":{"type":"default"}} -->
<div class="wp-block-group kv-page kv-journal"><!-- wp:query-title {"type":"archive","level":1,"className":"kv-h1"} /-->
<!-- wp:query {"query":{"perPage":10,"inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"kv-jcard","layout":{"type":"default"}} -->
<div class="wp-block-group kv-jcard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kv-jcard__img"} /-->
<!-- wp:group {"className":"kv-jcard__t","layout":{"type":"default"}} -->
<div class="wp-block-group kv-jcard__t"><!-- wp:post-date {"className":"kv-meta"} /-->
<!-- wp:post-title {"isLink":true,"level":2,"className":"kv-h2"} /-->
<!-- wp:post-excerpt {"className":"kv-body"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
