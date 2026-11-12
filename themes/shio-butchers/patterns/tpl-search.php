<?php
/**
 * Title: Template: search
 * Slug: shio-butchers/tpl-search
 * Categories: shio-butchers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sb-main sb-main--list","layout":{"type":"constrained"}} -->
<main class="wp-block-group sb-main sb-main--list"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"<?php echo esc_attr( shio_butchers_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( shio_butchers_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"query":{"perPage":9,"inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->