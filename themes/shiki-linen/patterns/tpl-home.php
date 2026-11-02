<?php
/**
 * Title: Template: home
 * Slug: shiki-linen/tpl-home
 * Categories: shiki-linen
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sl-main","layout":{"type":"default"}} -->
<main class="wp-block-group sl-main"><!-- wp:group {"className":"sl-page","layout":{"type":"default"}} -->
<div class="wp-block-group sl-page"><!-- wp:heading {"level":1,"className":"sl-h1x"} -->
<h1 class="wp-block-heading sl-h1x"><?php echo wp_kses_post( shiki_linen_t( 'k6b2b5614' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sl-lead"} -->
<p class="sl-lead"><?php echo wp_kses_post( shiki_linen_t( 'k5263792e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="sl-sec sl-sec--tight" style="margin-top:56px"></div>
<!-- /wp:html -->

<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"sl-jfirst","layout":{"type":"default"}} -->
<div class="wp-block-group sl-jfirst"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:group {"className":"sl-jfirst__text","layout":{"type":"default"}} -->
<div class="wp-block-group sl-jfirst__text"><!-- wp:post-terms {"term":"category","className":"sl-meta"} /-->

<!-- wp:post-title {"level":2,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":40} /-->

<!-- wp:post-date {"className":"sl-meta"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query sl-jgrid"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":28} /-->

<!-- wp:post-date {"className":"sl-meta"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query --></main>
<!-- /wp:group -->