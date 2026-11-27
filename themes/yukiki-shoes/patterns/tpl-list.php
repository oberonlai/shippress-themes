<?php
/**
 * Title: Template: news rows
 * Slug: yukiki-shoes/tpl-list
 * Categories: yukiki-shoes
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list for the posts page, archive, category, tag and search templates: dated rows with a label box.
 */
?>
<!-- wp:group {"className":"ys-phead","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull ys-phead">
<!-- wp:html -->
<nav class="ys-crumb" aria-label="Breadcrumb"><a href="/"><?php echo esc_html( yukiki_shoes_t( 'crumb_home' ) ); ?></a><span aria-hidden="true">›</span><span><?php echo esc_html( yukiki_shoes_t( 'crumb_news' ) ); ?></span></nav>
<!-- /wp:html -->
<!-- wp:heading {"level":1,"className":"ys-phead__h"} -->
<h1 class="wp-block-heading ys-phead__h"><?php echo esc_html( yukiki_shoes_t( 'list_h' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ys-phead__lead"} -->
<p class="ys-phead__lead"><?php echo esc_html( yukiki_shoes_t( 'list_lead' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"ys-sec ys-sec--white","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ys-sec ys-sec--white">
<!-- wp:group {"className":"ys-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ys-wrap">
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"ys-rows ys-rows--q"} -->
<!-- wp:group {"className":"ys-qrow","layout":{"type":"default"}} -->
<div class="wp-block-group ys-qrow">
<!-- wp:post-date {"format":"j M Y","className":"ys-qrow__d"} /-->
<!-- wp:post-terms {"term":"category","className":"ys-box"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"className":"ys-qrow__t"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination {"className":"ys-pager"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"ys-body"} -->
<p class="ys-body"><?php echo esc_html( yukiki_shoes_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->