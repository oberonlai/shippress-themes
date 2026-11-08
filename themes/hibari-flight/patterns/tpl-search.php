<?php
/**
 * Title: Template: search
 * Slug: hibari-flight/tpl-search
 * Categories: hibari-flight
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hf-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hf-main"><!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-list","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hf-sec hf-list"><!-- wp:search {"label":"<?php echo esc_attr( hibari_flight_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( hibari_flight_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hf-cards"} -->
<div class="wp-block-query alignwide hf-cards"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->