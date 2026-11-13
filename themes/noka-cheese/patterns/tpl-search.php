<?php
/**
 * Title: Template: search
 * Slug: noka-cheese/tpl-search
 * Categories: noka-cheese
 * Inserter: no
 * Viewport Width: 1440
 * Description: Search results.
 */
?>
<!-- wp:group {"className":"nk-main nk-main--list","tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group nk-main nk-main--list"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"<?php echo esc_attr( noka_cheese_t( 'tpl_search_label' ) ); ?>","buttonText":"<?php echo esc_attr( noka_cheese_t( 'tpl_search_label' ) ); ?>"} /-->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
