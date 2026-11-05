<?php
/**
 * Title: Template: journal list
 * Slug: misora-links/tpl-archive
 * Categories: misora-links
 * Viewport Width: 1440
 * Description: Journal list.
 */
?>
<!-- wp:group {"className":"ml-head ml-head--plain","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-head ml-head--plain"><!-- wp:paragraph {"className":"ml-word ml-head__word"} -->
<p class="ml-word ml-head__word"><?php echo esc_html( misora_links_t( 'jr_word' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-vert ml-head__vert"} -->
<p class="ml-vert ml-head__vert"><?php echo wp_kses_post( misora_links_t( 'jr_vert' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"archive","level":1,"className":"ml-head__h1"} /--></section>
<!-- /wp:group --><!-- wp:group {"className":"ml-band ml-band--stone","tagName":"section","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-band ml-band--stone"><!-- wp:group {"className":"ml-body__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-body__in"><!-- wp:query {"queryId":9,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ml-ticket ml-ticket--sm"} /-->
<!-- wp:post-date {"className":"ml-post__date"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"ml-post__title"} /-->
<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
