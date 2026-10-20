<?php
/**
 * Title: Search: head, field and results
 * Slug: aozora-primary-school/tpl-search
 * Categories: aozora-primary-school
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ap-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-head"><!-- wp:group {"align":"wide","className":"ap-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ap-head__grid"><!-- wp:group {"className":"ap-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( aozora_primary_school_t( 'not_found_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"ap-head__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ap-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group ap-head__side"><!-- wp:search {"label":<?php echo wp_json_encode( aozora_primary_school_t( 'tpl_search_01' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( aozora_primary_school_t( 'tpl_search_02' ) ); ?>,"buttonText":<?php echo wp_json_encode( aozora_primary_school_t( 'not_found_04' ) ); ?>,"className":"ap-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ap-section ap-section--flush ap-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ap-section ap-section--flush ap-section--last"><!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"ap-posts"} -->
<div class="wp-block-query alignwide ap-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"ap-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ap-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( aozora_primary_school_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ap-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ap-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( aozora_primary_school_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( aozora_primary_school_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( aozora_primary_school_t( 'tpl_search_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
