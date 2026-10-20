<?php
/**
 * Title: Category: head and journal notes
 * Slug: kasumi-mortgage/tpl-category
 * Categories: kasumi-mortgage
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head (label, title, description, category chips) and its journal notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-head"><!-- wp:group {"align":"wide","className":"km-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-head__grid"><!-- wp:group {"className":"km-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'tpl_category_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"km-head__title","showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group km-head__side"><!-- wp:term-description {"className":"is-style-lead"} /-->

<!-- wp:paragraph {"className":"km-chips"} -->
<p class="km-chips"><?php echo wp_kses_post( kasumi_mortgage_t( 'tpl_archive_01' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-section--flush km-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-section--flush km-section--last"><!-- wp:query {"queryId":6,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"km-posts"} -->
<div class="wp-block-query alignwide km-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"km-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group km-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( kasumi_mortgage_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"km-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"km-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kasumi_mortgage_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kasumi_mortgage_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( kasumi_mortgage_t( 'tpl_archive_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
