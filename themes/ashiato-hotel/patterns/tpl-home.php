<?php
/**
 * Title: Template: journal list
 * Slug: ashiato-hotel/tpl-home
 * Categories: ashiato-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page template.
 */
?>
<!-- wp:group {"className":"ah-inner","layout":{"type":"default"}} -->
<div class="wp-block-group ah-inner"><!-- wp:group {"className":"ah-listing","layout":{"type":"default"}} -->
<div class="wp-block-group ah-listing"><!-- wp:heading {"level":1,"className":"ah-h2 ah-h2--large"} -->
<h1 class="wp-block-heading ah-h2 ah-h2--large"><?php echo esc_html( ashiato_hotel_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ah-posts"} -->
<!-- wp:group {"className":"ah-post","layout":{"type":"default"}} -->
<div class="wp-block-group ah-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ah-post__img"} /-->

<!-- wp:group {"className":"ah-post__body","layout":{"type":"default"}} -->
<div class="wp-block-group ah-post__body"><!-- wp:post-date {"format":"F j, Y","className":"ah-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"ah-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"ah-post__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ah-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( ashiato_hotel_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
