<?php
/**
 * Title: Archive: head and posts
 * Slug: hatsumei-patent/tpl-archive
 * Categories: hatsumei-patent
 * Keywords: journal, template
 * Viewport Width: 1440
 * Inserter: no
 * Description: The journal template: head, lead and its posts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hp-head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-head"><!-- wp:group {"align":"wide","className":"hp-head__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hp-head__grid"><!-- wp:group {"className":"hp-head__main","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( hatsumei_patent_t( 'latest_journal_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"className":"hp-head__title","showPrefix":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hp-head__side","layout":{"type":"default"}} -->
<div class="wp-block-group hp-head__side"><!-- wp:term-description {"className":"is-style-lead"} /-->

<!-- wp:paragraph {"className":"hp-chips"} -->
<p class="hp-chips"><?php echo wp_kses_post( hatsumei_patent_t( 'tpl_archive_01' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hp-section hp-section--flush hp-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hp-section hp-section--flush hp-section--last"><!-- wp:query {"queryId":5,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"hp-posts"} -->
<div class="wp-block-query alignwide hp-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"hp-meta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group hp-meta"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":<?php echo wp_json_encode( hatsumei_patent_t( 'date_format' ) ); ?>} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hp-posts__title"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hp-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hatsumei_patent_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hatsumei_patent_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo wp_kses_post( hatsumei_patent_t( 'tpl_archive_02' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
