<?php
/**
 * Title: Tag: head and notes
 * Slug: hidamari-care/tpl-tag
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-pagehead"><!-- wp:paragraph {"className": "hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hc-pagehead__title"} /-->

<!-- wp:term-description {"className":"hc-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hc-section hc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hc-section hc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hc-notes"} -->
<div class="wp-block-query alignwide hc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hc-note__img"} /-->

<!-- wp:group {"className":"hc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hidamari_care_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hidamari_care_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hidamari_care_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
