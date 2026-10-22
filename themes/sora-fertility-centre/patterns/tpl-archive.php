<?php
/**
 * Title: Template: archive
 * Slug: sora-fertility-centre/tpl-archive
 * Categories: sora-fertility-centre
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sf-main sf-main--blog","layout":{"type":"default"}} -->
<main class="wp-block-group sf-main sf-main--blog"><!-- wp:query-title {"type":"archive","level":1,"className":"sf-h sf-pagetitle"} /--><!-- wp:query {"className":"sf-posts","layout":{"type":"default"}} --><div class="wp-block-query sf-posts"><!-- wp:post-template {"className":"sf-posts__list"} --><!-- wp:group {"className":"sf-postrow","layout":{"type":"default"}} --><div class="wp-block-group sf-postrow"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sf-postrow__img"} /--><!-- wp:group {"className":"sf-postrow__text","layout":{"type":"default"}} --><div class="wp-block-group sf-postrow__text"><!-- wp:post-date {"className":"sf-label"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"sf-postrow__h"} /--><!-- wp:post-excerpt {"excerptLength":30,"className":"sf-body"} /--></div><!-- /wp:group --></div><!-- /wp:group --><!-- /wp:post-template --><!-- wp:query-pagination --><!-- wp:query-pagination-previous /--><!-- wp:query-pagination-next /--><!-- /wp:query-pagination --><!-- wp:query-no-results --><!-- wp:paragraph --><p><?php echo wp_kses_post( sora_fertility_centre_t( 'k6cef1db1' ) ); ?></p><!-- /wp:paragraph --><!-- /wp:query-no-results --></div><!-- /wp:query --></main>
<!-- /wp:group -->