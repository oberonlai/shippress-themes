<?php
/**
 * Title: Template: journal list
 * Slug: yuka-tiles/tpl-home
 * Categories: yuka-tiles
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"yt-sec yt-listing","layout":{"type":"default"}} -->
<section class="wp-block-group yt-sec yt-listing">
<!-- wp:group {"className":"yt-wrap yt-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group yt-wrap yt-wrap--c">
<!-- wp:paragraph {"className":"yt-label"} -->
<p class="yt-label"><?php echo esc_html( yuka_tiles_t( 'list_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yt-h2 yt-h2--page"} -->
<h1 class="wp-block-heading yt-h2 yt-h2--page"><?php echo esc_html( yuka_tiles_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"yt-list"} -->
<!-- wp:group {"className":"yt-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group yt-listrow">
<!-- wp:post-date {"format":"j M Y","className":"yt-listrow__d"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"yt-listrow__t"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"yt-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( yuka_tiles_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
