<?php
/**
 * Title: Template: single
 * Slug: fukubi-clinic/tpl-single
 * Categories: fukubi-clinic
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"fc-main fc-main--single","layout":{"type":"default"}} -->
<main class="wp-block-group fc-main fc-main--single"><!-- wp:group {"align":"full","className":"fc-pagehead fc-pagehead--single","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-pagehead fc-pagehead--single"><!-- wp:group {"className":"fc-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group fc-pagehead__in"><!-- wp:post-terms {"term":"category","className":"fc-single__cat"} /--><!-- wp:post-title {"level":1} /--><!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--white"><!-- wp:group {"className":"fc-in fc-single__wrap","layout":{"type":"default"}} -->
<div class="wp-block-group fc-in fc-single__wrap"><!-- wp:post-featured-image {"aspectRatio":"16/9","className":"fc-single__img"} /-->
<!-- wp:post-content {"className":"fc-body","layout":{"type":"constrained","contentSize":"720px"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","className":"fc-sec fc-sec--page fc-related","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull fc-sec fc-sec--page fc-related"><!-- wp:group {"className":"fc-in","layout":{"type":"default"}} -->
<div class="wp-block-group fc-in"><!-- wp:heading {"className":"fc-h2"} -->
<h2 class="wp-block-heading fc-h2"><?php echo wp_kses_post( fc_t( 'k342c3fb4' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"fc-nlist"} -->
<div class="wp-block-query fc-nlist"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"fc-nrow","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group fc-nrow"><!-- wp:group {"className":"fc-nrow__date","layout":{"type":"default"}} -->
<div class="wp-block-group fc-nrow__date"><!-- wp:post-date {"format":"Y","className":"fc-nrow__y"} /-->
<!-- wp:post-date {"format":"m.d","className":"fc-nrow__d"} /--></div>
<!-- /wp:group --><!-- wp:post-terms {"term":"category","className":"fc-nrow__cat"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"fc-nrow__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:pattern {"slug":"fukubi-clinic/inner-close"} /--></main>
<!-- /wp:group -->