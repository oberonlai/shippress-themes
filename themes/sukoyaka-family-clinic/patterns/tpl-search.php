<?php
/**
 * Title: Search: head, field and results
 * Slug: sukoyaka-family-clinic/tpl-search
 * Categories: sukoyaka-family-clinic
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sf-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-head"><!-- wp:group {"align":"wide","className":"sf-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sf-head__grid"><!-- wp:group {"className":"sf-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'not_found_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"sf-head__title"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sf-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group sf-head__side"><!-- wp:search {"label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'tpl_search_01' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'tpl_search_02' ) ); ?>,"buttonText":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'not_found_04' ) ); ?>,"className":"sf-search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sf-section sf-section--flush sf-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sf-section sf-section--flush sf-section--last"><!-- wp:query {"queryId":8,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"sf-posts"} -->
<div class="wp-block-query alignwide sf-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"sf-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group sf-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"sf-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sf-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( sukoyaka_family_clinic_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( sukoyaka_family_clinic_t( 'tpl_search_03' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
