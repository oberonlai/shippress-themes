<?php
/**
 * Title: Template: post list
 * Slug: kaze-clinic/tpl-list
 * Categories: kaze-clinic
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal, archive, category, tag and search lists: a page title and posts as three-column cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec kz-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec kz-pagehead"><!-- wp:group {"className":"kz-wrap kz-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--list"><!-- wp:heading {"level":1,"className":"kz-h1"} -->
<h1 class="wp-block-heading kz-h1"><?php echo esc_html( kaze_clinic_t( 'ls_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kz-sec","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kz-sec"><!-- wp:group {"className":"kz-wrap kz-wrap--list","layout":{"type":"default"}} -->
<div class="wp-block-group kz-wrap kz-wrap--list"><!-- wp:query {"queryId":32,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kz-posts"} -->
<div class="wp-block-query kz-posts"><!-- wp:post-template {"className":"kz-posts__t"} -->
<!-- wp:group {"className":"kz-post sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kz-post sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kz-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"kz-post__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kz-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
