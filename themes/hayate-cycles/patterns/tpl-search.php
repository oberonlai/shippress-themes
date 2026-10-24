<?php
/**
 * Title: Template: search
 * Slug: hayate-cycles/tpl-search
 * Categories: hayate-cycles
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hc-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group hc-main"><!-- wp:group {"align":"full","className":"hc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagehead"><!-- wp:query-title {"type":"search","level":1,"className":"hc-pagehead__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"hc-pagebody hc-pagebody--list","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-pagebody hc-pagebody--list"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hc-story-rows","layout":{"type":"default"}} -->
<div class="wp-block-query hc-story-rows"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","className":"hc-story-row","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-story-row"><!-- wp:post-date {"className":"hc-meta"} /-->

<!-- wp:group {"className":"hc-story-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story-row__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"hc-story-row__title"} /-->

<!-- wp:post-excerpt {"excerptLength":34,"className":"hc-story-row__excerpt"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","className":"hc-story-row__img sp-reveal sp-reveal--wipe"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hayate_cycles_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->