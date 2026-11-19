<?php
/**
 * Title: Template: journal list
 * Slug: sumibi-yakiniku/tpl-home
 * Categories: sumibi-yakiniku
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and archive templates: a charcoal title band from the gutter, then the posts on blush in three columns.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-titlebar","layout":{"type":"default"}} -->
<section class="wp-block-group sy-titlebar"><!-- wp:html -->
<img class="sy-titlebar__bg" src="<?php echo sumibi_yakiniku_img( 'p09-ribeye-coals.webp' ); ?>" alt="" aria-hidden="true"/>
<!-- /wp:html --><!-- wp:heading {"level":1,"className":"sy-titlebar__h"} -->
<h1 class="wp-block-heading sy-titlebar__h"><?php echo esc_html( sumibi_yakiniku_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sy-sec sy-listing","layout":{"type":"default"}} -->
<section class="wp-block-group sy-sec sy-listing"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"sy-posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sy-post","layout":{"type":"default"}} -->
<div class="wp-block-group sy-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sy-post__img"} /-->

<!-- wp:post-terms {"term":"category","className":"sy-post__cat"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"sy-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"sy-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sy-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( sumibi_yakiniku_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
