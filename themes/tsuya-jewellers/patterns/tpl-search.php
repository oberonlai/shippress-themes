<?php
/**
 * Title: Template: search
 * Slug: tsuya-jewellers/tpl-search
 * Categories: tsuya-jewellers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ts-main","layout":{"type":"default"}} -->
<main class="wp-block-group ts-main"><!-- wp:group {"className":"ts-plain","layout":{"type":"default"}} -->
<div class="wp-block-group ts-plain"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:search {"label":"<?php echo esc_attr( tsuya_jewellers_t( 'a13348442' ) ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr( tsuya_jewellers_t( 'a13348442' ) ); ?>"} /-->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":25} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'k54c84466' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->