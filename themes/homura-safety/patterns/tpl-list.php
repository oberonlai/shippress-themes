<?php
/**
 * Title: Template: post list
 * Slug: homura-safety/tpl-list
 * Categories: homura-safety
 * Inserter: no
 * Description: Journal, archive, category, tag and search lists: a dark page head with a short slanted bar word, then a three-column post grid.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-pagehead"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'ls_word' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'ls_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-sec hs-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-sec hs-list"><!-- wp:query {"queryId":22,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hs-journal__q","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide hs-journal__q"><!-- wp:post-template {"className":"hs-journal__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":25} /-->

<!-- wp:read-more {"content":"<?php echo esc_html( homura_safety_t( 'ls_read' ) ); ?>"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
