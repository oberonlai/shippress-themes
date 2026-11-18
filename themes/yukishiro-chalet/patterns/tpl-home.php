<?php
/**
 * Title: Template: journal list
 * Slug: yukishiro-chalet/tpl-home
 * Categories: yukishiro-chalet
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page template.
 */
?>
<!-- wp:group {"tagName":"main","className":"yk-main","layout":{"type":"default"}} -->
<main class="wp-block-group yk-main"><!-- wp:group {"tagName":"section","className":"yk-sec yk-listing","layout":{"type":"default"}} -->
<section class="wp-block-group yk-sec yk-listing"><!-- wp:group {"className":"yk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-wrap"><!-- wp:group {"className":"yk-chap","layout":{"type":"default"}} -->
<div class="wp-block-group yk-chap"><!-- wp:paragraph {"className":"yk-lead"} -->
<p class="yk-lead"><?php echo esc_html( yukishiro_chalet_t( 'list_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title"} -->
<h2 class="wp-block-heading yk-title"><?php echo esc_html( yukishiro_chalet_t( 'list_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"yk-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity yk-rule"/>
<!-- /wp:separator -->
</div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"yk-posts"} -->
<!-- wp:group {"className":"yk-post","layout":{"type":"default"}} -->
<div class="wp-block-group yk-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"yk-post__img"} /-->

<!-- wp:post-date {"format":"F j, Y","className":"yk-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"yk-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"yk-post__x"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"yk-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( yukishiro_chalet_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
