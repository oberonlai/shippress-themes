<?php
/**
 * Title: Template: index
 * Slug: umi-swim/tpl-index
 * Categories: umi-swim
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"us-main us-main--front","layout":{"type":"constrained"}} -->
<main class="wp-block-group us-main us-main--front"><!-- wp:pattern {"slug":"umi-swim/inner-news"} /-->

<!-- wp:group {"align":"full","tagName":"section","className":"us-sec us-in us-innews","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull us-sec us-in us-innews"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"us-news","layout":{"type":"default"}} -->
<div class="wp-block-query us-news"><!-- wp:post-template {"className":"us-news__grid"} -->
<!-- wp:group {"className":"us-card us-newscard","layout":{"type":"default"}} -->
<div class="wp-block-group us-card us-newscard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"7/9","className":"us-newscard__img"} /-->
<!-- wp:post-date {"className":"us-card__time"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"us-card__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28,"className":"us-card__tx"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( umi_swim_t( 'k67f0f397' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->