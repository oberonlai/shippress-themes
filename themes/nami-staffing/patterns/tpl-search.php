<?php
/**
 * Title: Search: head, field and results
 * Slug: nami-staffing/tpl-search
 * Categories: nami-staffing
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ns-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-head"><!-- wp:group {"align":"wide","className":"ns-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ns-head__grid"><!-- wp:group {"className":"ns-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( nami_staffing_t( 'not_found_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"ns-head__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ns-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ns-head__side"><!-- wp:search {"label":<?php echo wp_json_encode( nami_staffing_t( 'tpl_search_01' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( nami_staffing_t( 'tpl_search_02' ) ); ?>,"buttonText":<?php echo wp_json_encode( nami_staffing_t( 'not_found_04' ) ); ?>,"className":"ns-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ns-section ns-section--flush ns-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ns-section ns-section--flush ns-section--last"><!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"ns-posts"} -->
<div class="wp-block-query alignwide ns-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"ns-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ns-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( nami_staffing_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ns-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ns-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( nami_staffing_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( nami_staffing_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( nami_staffing_t( 'tpl_search_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
