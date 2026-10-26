<?php
/**
 * Title: Template: archive
 * Slug: shirabe-research/tpl-archive
 * Categories: shirabe-research
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sr-main sr-main--list","layout":{"type":"constrained"}} -->
<main class="wp-block-group sr-main sr-main--list"><!-- wp:group {"tagName":"section","className":"sr-sec sr-page","layout":{"type":"constrained"}} --><section class="wp-block-group sr-sec sr-page"><!-- wp:query-title {"type":"archive","level":1,"className":"sr-h1"} /--><!-- wp:query {"query":{"perPage":10,"inherit":true},"layout":{"type":"default"}} --><div class="wp-block-query"><!-- wp:post-template --><!-- wp:post-title {"isLink":true,"level":2} /--><!-- wp:post-excerpt /--><!-- /wp:post-template --><!-- wp:query-no-results --><!-- wp:paragraph --><p><?php echo wp_kses_post( shirabe_research_t( 'kbee0a8cf' ) ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></section><!-- /wp:group --></main>
<!-- /wp:group -->