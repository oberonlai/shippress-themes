<?php
/**
 * Title: Template: house letters
 * Slug: asayake-lodge/tpl-journal
 * Categories: asayake-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Page head and the post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"al-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-pagehead"><!-- wp:group {"className":"al-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group al-pagehead__in"><!-- wp:paragraph {"className":"al-eyebrow"} -->
<p class="al-eyebrow"><?php echo esc_html( asayake_lodge_t( 'j_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"al-pagehead__h"} -->
<h1 class="wp-block-heading al-pagehead__h"><?php echo esc_html( asayake_lodge_t( 'j_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"al-sec al-listing","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull al-sec al-listing"><!-- wp:group {"className":"al-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group al-wrap"><!-- wp:query {"queryId":31,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"al-loop"} -->
<div class="wp-block-query al-loop"><!-- wp:post-template {"className":"al-loop__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"al-post","layout":{"type":"default"}} -->
<div class="wp-block-group al-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"al-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"al-post__d"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"al-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":26,"className":"al-post__x"} /--></div>
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
