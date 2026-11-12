<?php
/**
 * Title: Template: search results
 * Slug: kikai-fair/tpl-search
 * Categories: kikai-fair
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kf-main kf-main--list","layout":{"type":"constrained"}} -->
<main class="wp-block-group kf-main kf-main--list"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"Search","buttonText":"Search"} /-->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
