<?php
/**
 * Title: Template: archive
 * Slug: shimaya-villas/tpl-archive
 * Categories: shimaya-villas
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sv-main","layout":{"type":"default"}} -->
<main class="wp-block-group sv-main"><!-- wp:pattern {"slug":"shimaya-villas/window-archive"} /-->
<!-- wp:group {"className":"sv-sec sv-list-sec","layout":{"type":"default"}} -->
<div class="wp-block-group sv-sec sv-list-sec"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sv-posts"} -->
<div class="wp-block-query sv-posts"><!-- wp:post-template {"className":"sv-posts__grid","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"sv-posts__img"} /-->
<!-- wp:group {"className":"sv-posts__meta","layout":{"type":"default"}} -->
<div class="wp-block-group sv-posts__meta"><!-- wp:post-terms {"term":"category","suffix":" \u2022 "} /--><!-- wp:post-date {"format":"<?php echo esc_attr( shimaya_villas_t( 'date_fmt' ) ); ?>"} /--></div>
<!-- /wp:group -->
<!-- wp:post-title {"isLink":true,"level":3,"className":"sv-posts__t"} /-->
<!-- wp:read-more {"content":"Read the post","className":"sv-posts__more"} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->