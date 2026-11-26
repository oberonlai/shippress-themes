<?php
/**
 * Title: Template: news list
 * Slug: shikii-mats/tpl-home
 * Categories: shikii-mats
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page, archive, category and tag templates.
 */
?>
<!-- wp:group {"className":"sm-sec sm-listing","tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group sm-sec sm-listing">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:paragraph {"className":"sm-eyebrow"} -->
<p class="sm-eyebrow"><?php echo esc_html( shikii_mats_t( 'list_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sm-h1 sm-h1--page"} -->
<h1 class="wp-block-heading sm-h1 sm-h1--page"><?php echo esc_html( shikii_mats_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sm-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sm-post","layout":{"type":"default"}} -->
<div class="wp-block-group sm-post">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sm-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"sm-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sm-post__t"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sm-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shikii_mats_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
