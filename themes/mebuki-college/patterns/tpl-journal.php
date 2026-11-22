<?php
/**
 * Title: Template: journal
 * Slug: mebuki-college/tpl-journal
 * Categories: mebuki-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Journal page head and the post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-pagehead"><!-- wp:group {"className":"mb-wrap mb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap mb-pagehead__in"><!-- wp:paragraph {"className":"mb-eyebrow"} -->
<p class="mb-eyebrow"><?php echo esc_html( mebuki_college_t( 'j_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"mb-pagehead__h"} -->
<h1 class="wp-block-heading mb-pagehead__h"><?php echo esc_html( mebuki_college_t( 'j_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"mb-sec mb-sec--wash","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mb-sec mb-sec--wash"><!-- wp:group {"className":"mb-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mb-wrap"><!-- wp:query {"queryId":11,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"mb-loop"} -->
<div class="wp-block-query mb-loop"><!-- wp:post-template {"className":"mb-loop__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"mb-post","layout":{"type":"default"}} -->
<div class="wp-block-group mb-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"mb-post__img"} /-->

<!-- wp:post-date {"format":"d.m.Y","className":"mb-post__d"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"mb-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"mb-post__x"} /--></div>
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
