<?php
/**
 * Title: Template: search
 * Slug: yubi-college/tpl-search
 * Categories: yubi-college
 * Viewport Width: 1440
 * Inserter: false
 * Description: Search form and results.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"yb-pagehead ","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-pagehead "><!-- wp:group {"className":"yb-wrap yb-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wrap yb-pagehead__in"><!-- wp:paragraph {"className":"yb-kicker"} -->
<p class="yb-kicker"><?php echo esc_html( yubi_college_t( 's_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"yb-pagehead__h"} -->
<h1 class="wp-block-heading yb-pagehead__h"><?php echo esc_html( yubi_college_t( 's_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"yb-sec yb-sec--ground","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull yb-sec yb-sec--ground"><!-- wp:group {"className":"yb-wide","layout":{"type":"default"}} -->
<div class="wp-block-group yb-wide"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","className":"yb-search"} /-->
<!-- wp:query {"queryId":12,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"yb-loop"} -->
<div class="wp-block-query yb-loop"><!-- wp:post-template {"className":"yb-loop__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"yb-post","layout":{"type":"default"}} -->
<div class="wp-block-group yb-post"><!-- wp:post-date {"format":"d.m.Y","className":"yb-post__d"} /-->
<!-- wp:post-title {"level":2,"isLink":true,"className":"yb-post__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28,"className":"yb-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
