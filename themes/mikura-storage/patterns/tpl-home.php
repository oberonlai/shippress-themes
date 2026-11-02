<?php
/**
 * Title: Template: posts page
 * Slug: mikura-storage/tpl-home
 * Categories: mikura-storage
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts page.
 */
?>
<!-- wp:group {"tagName":"main","className":"mk-main ","layout":{"type":"default"}} -->
<main class="wp-block-group mk-main ">
<!-- wp:group {"className":"mk-sec","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull mk-sec">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:heading {"level":1,"className":"mk-h1 mk-h1--inner"} -->
<h1 class="wp-block-heading mk-h1 mk-h1--inner">News</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mk-intro"} -->
<p class="mk-intro">Three household stories and one note from the building.</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"className":"mk-postgrid"} -->
<!-- wp:group {"className":"mk-card","layout":{"type":"default"}} -->
<div class="wp-block-group mk-card">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"mk-ph mk-card__ph"} /-->

<!-- wp:group {"className":"mk-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group mk-card__body">
<!-- wp:post-title {"isLink":true,"level":3,"className":"mk-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"className":"mk-card__text"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( mikura_storage_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
