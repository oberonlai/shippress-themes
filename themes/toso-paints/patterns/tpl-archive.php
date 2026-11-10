<?php
/**
 * Title: Template: archive
 * Slug: toso-paints/tpl-archive
 * Categories: toso-paints
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tp-main","layout":{"type":"default"}} -->
<main class="wp-block-group tp-main"><!-- wp:group {"align":"full","className":"tp-sec tp-journal tp-archive","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tp-sec tp-journal tp-archive"><!-- wp:query-title {"type":"archive","level":1,"className":"tp-page__title"} /-->

<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"tp-rows"} -->
<div class="wp-block-query tp-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"tp-row","layout":{"type":"default"}} -->
<div class="wp-block-group tp-row"><!-- wp:post-date {"format":"j M Y","className":"tp-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tp-row__title"} /-->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"tp-row__img"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( toso_paints_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->