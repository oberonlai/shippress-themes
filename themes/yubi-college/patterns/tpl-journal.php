<?php
/**
 * Title: Template: notices
 * Slug: yubi-college/tpl-journal
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Notices page head and the post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-pagehead ","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-pagehead "><!-- wp:group {"className":"yb-wrap yb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-pagehead__in"><!-- wp:paragraph {"className":"yb-kicker"} -->
<p class="yb-kicker"><?php echo esc_html( yubi_college_t( 'j_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-pagehead__h"} -->
<h1 class="wp-block-heading yb-pagehead__h"><?php echo esc_html( yubi_college_t( 'j_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yb-sec yb-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-sec yb-sec--ground"><!-- wp:group {"className":"yb-wide","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide"><!-- wp:query {"queryId":11,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"yb-loop"} -->
<div class="wp-block-query yb-loop"><!-- wp:post-template {"className":"yb-loop__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"yb-post","layout":{"type":"default"}} -->
<div class="wp-block-group yb-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"yb-post__img"} /-->
<!-- wp:post-date {"format":"d.m.Y","className":"yb-post__d"} /-->
<!-- wp:post-title {"level":2,"isLink":true,"className":"yb-post__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28,"className":"yb-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
