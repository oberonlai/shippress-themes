<?php
/**
 * Title: Template: search
 * Slug: hojo-brokers/tpl-search
 * Categories: hojo-brokers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hb-main hb-main--list","layout":{"type":"default"}} -->
<main class="wp-block-group hb-main hb-main--list"><!-- wp:group {"className":"hb-wrap hb-listing","layout":{"type":"default"}} -->
<div class="wp-block-group hb-wrap hb-listing"><!-- wp:search {"label":"<?php echo esc_attr( hojo_brokers_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( hojo_brokers_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->
<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->