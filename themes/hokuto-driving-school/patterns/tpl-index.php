<?php
/**
 * Title: Index: head and notes
 * Slug: hokuto-driving-school/tpl-index
 * Categories: hokuto-driving-school
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The fallback list of journal notes with its head.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-head"><!-- wp:group {"align":"wide","className":"hk-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hk-head__grid"><!-- wp:group {"className":"hk-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hokuto_driving_school_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hk-head__title"} -->
<h1 class="wp-block-heading hk-head__title"><?php echo wp_kses_post( hokuto_driving_school_t( 'tpl_home_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hk-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'tpl_index_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-chips"} -->
<p class="hk-chips"><?php echo wp_kses_post( hokuto_driving_school_t( 'tpl_archive_01' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hk-section hk-section--flush hk-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-section--flush hk-section--last"><!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hk-posts"} -->
<div class="wp-block-query alignwide hk-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hk-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hk-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hokuto_driving_school_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hk-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hokuto_driving_school_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hokuto_driving_school_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hokuto_driving_school_t( 'tpl_archive_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
