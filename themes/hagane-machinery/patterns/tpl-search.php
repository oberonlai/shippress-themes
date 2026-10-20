<?php
/**
 * Title: Search: head, field and results
 * Slug: hagane-machinery/tpl-search
 * Categories: hagane-machinery
 * Keywords: news, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search field, then the matching posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hm-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-head"><!-- wp:group {"align":"wide","className":"hm-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hm-head__grid"><!-- wp:group {"className":"hm-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hagane_machinery_t( 'not_found_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"hm-head__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hm-head__side"><!-- wp:search {"label":<?php echo wp_json_encode( hagane_machinery_t( 'tpl_search_01' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hagane_machinery_t( 'tpl_search_02' ) ); ?>,"buttonText":<?php echo wp_json_encode( hagane_machinery_t( 'not_found_04' ) ); ?>,"className":"hm-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hm-section hm-section--flush hm-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hm-section hm-section--flush hm-section--last"><!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hm-posts"} -->
<div class="wp-block-query alignwide hm-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hm-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hm-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hagane_machinery_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hm-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hm-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hagane_machinery_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hagane_machinery_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hagane_machinery_t( 'tpl_search_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
