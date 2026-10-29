<?php
/**
 * Title: Template: home
 * Slug: sekisan-partners/tpl-home
 * Categories: sekisan-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sk-main","layout":{"type":"default"}} -->
<main class="wp-block-group sk-main" id="top"><!-- wp:group {"tagName":"section","className":"sk-wrap sk-page","layout":{"type":"default"}} -->
<section class="wp-block-group sk-wrap sk-page"><!-- wp:heading {"level":1,"className":"sk-head sk-head--teal"} -->
<h1 class="wp-block-heading sk-head sk-head--teal"><span class="sk-head__first"><?php echo wp_kses_post( sekisan_partners_t( 'k8d9c307c' ) ); ?></span><?php echo wp_kses_post( sekisan_partners_t( 'k5f306530' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sk-news"} -->
<div class="wp-block-query sk-news"><!-- wp:post-template -->
<!-- wp:group {"className":"sk-newsrow","layout":{"type":"default"}} -->
<div class="wp-block-group sk-newsrow"><!-- wp:group {"className":"sk-newsrow__meta","layout":{"type":"default"}} -->
<div class="wp-block-group sk-newsrow__meta"><!-- wp:post-date {"format":"M. j, Y","className":"sk-newsrow__date"} /-->

<!-- wp:post-terms {"term":"category","className":"sk-newsrow__chip"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-newsrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group sk-newsrow__body"><!-- wp:post-title {"level":2,"isLink":true,"className":"sk-newsrow__title"} /-->

<!-- wp:post-excerpt {"excerptLength":32} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( sekisan_partners_t( 'k83fdfdea' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->