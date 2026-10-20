<?php
/**
 * Title: Journal: head and notes
 * Slug: minato-business-hotel/tpl-home
 * Categories: minato-business-hotel
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal (posts page) head with its lead and category chips, then every note.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mb-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-head"><!-- wp:group {"align":"wide","className":"mb-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide mb-head__grid"><!-- wp:group {"className":"mb-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( minato_business_hotel_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"mb-head__title"} -->
<h1 class="wp-block-heading mb-head__title"><?php echo wp_kses_post( minato_business_hotel_t( 'tpl_home_01' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mb-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group mb-head__side"><!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'tpl_home_02' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mb-chips"} -->
<p class="mb-chips"><?php echo wp_kses_post( minato_business_hotel_t( 'tpl_archive_01' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"mb-section mb-section--flush mb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull mb-section mb-section--flush mb-section--last"><!-- wp:query {"queryId":3,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"mb-posts"} -->
<div class="wp-block-query alignwide mb-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"mb-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mb-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( minato_business_hotel_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"mb-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mb-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( minato_business_hotel_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( minato_business_hotel_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( minato_business_hotel_t( 'tpl_archive_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
