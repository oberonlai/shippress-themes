<?php
/**
 * Title: Notes: page head and notes
 * Slug: niko-kids-clinic/tpl-journal
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Notes head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-pagehead"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "nk-pagehead__title"} -->
<h1 class="wp-block-heading nk-pagehead__title"><?php echo esc_html( niko_kids_clinic_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "nk-pagehead__lead"} -->
<p class="nk-pagehead__lead"><?php echo esc_html( niko_kids_clinic_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "nk-notes"} -->
<div class="wp-block-query alignwide nk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nk-note__img"} /-->

<!-- wp:group {"className":"nk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"nk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"nk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( niko_kids_clinic_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( niko_kids_clinic_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
