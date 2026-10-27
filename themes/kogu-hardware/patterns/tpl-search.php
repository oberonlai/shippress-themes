<?php
/**
 * Title: Template: search
 * Slug: kogu-hardware/tpl-search
 * Categories: kogu-hardware
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kh-main","layout":{"type":"default"}} -->
<main class="wp-block-group kh-main"><!-- wp:group {"className":"kh-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group kh-pagehead"><!-- wp:query-title {"type":"search","className":"kh-pagehead__t"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kh-posts"} -->
<div class="wp-block-query kh-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"kh-row kh-row--post","layout":{"type":"default"}} -->
<div class="wp-block-group kh-row kh-row--post"><!-- wp:post-date {"format":"<?php echo esc_attr( kogu_hardware_t( 'date_fmt' ) ); ?>","className":"kh-lbl"} /-->

<!-- wp:group {"className":"kh-row__body","layout":{"type":"default"}} -->
<div class="wp-block-group kh-row__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"kh-row__t"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"kh-row__ex"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kh-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->