<?php
/**
 * Title: Template: archive
 * Slug: tsuya-jewellers/tpl-archive
 * Categories: tsuya-jewellers
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ts-main","layout":{"type":"default"}} -->
<main class="wp-block-group ts-main"><!-- wp:group {"className":"ts-plain","layout":{"type":"default"}} -->
<div class="wp-block-group ts-plain"><!-- wp:query-title {"type":"archive","level":1} /-->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"excerptLength":25} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tsuya_jewellers_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->