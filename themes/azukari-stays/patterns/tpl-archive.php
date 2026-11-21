<?php
/**
 * Title: Template: journal list
 * Slug: azukari-stays/tpl-archive
 * Categories: azukari-stays
 * Inserter: false
 * Description: Journal, category and tag lists: title band and a post grid.
 */
?>
<!-- wp:group {"tagName":"main","className":"az-main az-listing","layout":{"type":"default"}} -->
<main class="wp-block-group az-main az-listing"><!-- wp:group {"className":"az-pghead","layout":{"type":"default"}} -->
<div class="wp-block-group az-pghead"><!-- wp:paragraph {"className":"az-lab"} -->
<p class="az-lab"><?php echo esc_html( azukari_stays_t( 'tpl_archive_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:query-title {"type":"archive","level":1,"showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"az-posts"} -->
<div class="wp-block-query az-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
<!-- wp:post-terms {"term":"category","className":"az-lab"} /-->
<!-- wp:post-title {"level":2,"isLink":true,"className":"az-post-title"} /-->
<!-- wp:post-excerpt {"excerptLength":28} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
