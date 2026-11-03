<?php
/**
 * Title: Template: search
 * Slug: nodo-ent/tpl-search
 * Categories: nodo-ent
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"nd-page","layout":{"type":"default"}} -->
<main class="wp-block-group nd-page"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"<?php echo esc_attr( nodo_ent_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( nodo_ent_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":6,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->