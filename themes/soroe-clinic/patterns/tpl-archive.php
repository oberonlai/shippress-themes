<?php
/**
 * Title: Template: archive
 * Slug: soroe-clinic/tpl-archive
 * Categories: soroe-clinic
 * Viewport Width: 1440
 * Inserter: false
 * Description: Archive head and the post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-pagehead"><!-- wp:group {"className":"so-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group so-pagehead__in"><!-- wp:paragraph {"className":"so-label"} -->
<p class="so-label"><?php echo esc_html( soroe_clinic_t( 'a_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:query-title {"type":"archive","level":1,"className":"so-pagehead__h"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"so-cell so-listing","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull so-cell so-listing"><!-- wp:group {"className":"so-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group so-wrap"><!-- wp:query {"queryId":31,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"so-loop"} -->
<div class="wp-block-query so-loop"><!-- wp:post-template {"className":"so-loop__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"so-post","layout":{"type":"default"}} -->
<div class="wp-block-group so-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"so-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"so-post__d"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"so-post__t"} /-->

<!-- wp:post-excerpt {"excerptLength":26,"className":"so-post__x"} /--></div>
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
