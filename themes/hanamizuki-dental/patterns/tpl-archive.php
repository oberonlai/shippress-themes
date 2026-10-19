<?php
/**
 * Title: Archive: head and notes
 * Slug: hanamizuki-dental/tpl-archive
 * Categories: hanamizuki-dental
 * Keywords: dental, dentist, clinic
 * Viewport Width: 1440
 * Inserter: no
 * Description: The archive head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-pagehead"><!-- wp:paragraph {"className": "hd-eyebrow"} -->
<p class="hd-eyebrow"><?php echo esc_html( hanamizuki_dental_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hd-pagehead__title"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hd-section hd-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hd-section hd-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hd-notes"} -->
<div class="wp-block-query alignwide hd-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hd-note__img"} /-->

<!-- wp:group {"className":"hd-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hd-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hd-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hd-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hd-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hanamizuki_dental_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hanamizuki_dental_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hanamizuki_dental_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
