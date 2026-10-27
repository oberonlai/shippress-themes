<?php
/**
 * Title: Template: archive
 * Slug: satei-adjusters/tpl-archive
 * Categories: satei-adjusters
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sa-main","layout":{"type":"default"}} -->
<main class="wp-block-group sa-main">
<!-- wp:group {"className":"sa-in sa-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group sa-in sa-pagehead"><!-- wp:group {"className":"sa-t2 sa-t2--head","layout":{"type":"default"}} -->
<div class="wp-block-group sa-t2 sa-t2--head"><!-- wp:paragraph {"className":"sa-lab"} -->
<p class="sa-lab"><?php echo wp_kses_post( satei_adjusters_t( 'k298d17b4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sa-t2__mid","layout":{"type":"default"}} -->
<div class="wp-block-group sa-t2__mid"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-t2__big","layout":{"type":"default"}} -->
<div class="wp-block-group sa-t2__big"><!-- wp:query-title {"type":"archive","level":1,"className":"sa-h1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sa-in sa-prose","layout":{"type":"default"}} -->
<div class="wp-block-group sa-in sa-prose"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sa-loop"} -->
<!-- wp:post-title {"level":3,"isLink":true,"className":"sa-h3"} /-->
<!-- wp:post-excerpt {"excerptLength":30} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->