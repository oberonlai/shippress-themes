<?php
/**
 * Title: Search: head, field and results
 * Slug: hada-dermatology/tpl-search
 * Categories: hada-dermatology
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hd-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-head"><!-- wp:group {"align":"wide","className":"hd-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-head__grid"><!-- wp:group {"className":"hd-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hd-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hada_dermatology_t( 'kbce06414' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"hd-head__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hd-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hd-head__side"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the journal","buttonText":"Search","className":"hd-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hd-section hd-section--flush hd-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-section--flush hd-section--last"><!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hd-posts"} -->
<div class="wp-block-query alignwide hd-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hd-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hd-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"F j, Y"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hd-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hd-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Newer"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Older"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hada_dermatology_t( 'k10a8a55d' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
