<?php
/**
 * Title: Journal: page head and notes
 * Slug: kanmi-dokoro/tpl-journal
 * Categories: kanmi-dokoro
 * Keywords: wagashi, tea house, matcha
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-pagehead"><!-- wp:paragraph {"className": "kd-eyebrow"} -->
<p class="kd-eyebrow"><?php echo esc_html( kanmi_dokoro_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kd-pagehead__title"} -->
<h1 class="wp-block-heading kd-pagehead__title"><?php echo esc_html( kanmi_dokoro_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kd-pagehead__lead"} -->
<p class="kd-pagehead__lead"><?php echo esc_html( kanmi_dokoro_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kd-section kd-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kd-section kd-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kd-notes"} -->
<div class="wp-block-query alignwide kd-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kd-note__img"} /-->

<!-- wp:group {"className":"kd-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kd-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kd-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kd-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kd-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kanmi_dokoro_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kanmi_dokoro_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kanmi_dokoro_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
