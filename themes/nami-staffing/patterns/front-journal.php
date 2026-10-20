<?php
/**
 * Title: Home: latest notes as a list beside the centre line
 * Slug: nami-staffing/front-journal
 * Categories: nami-staffing
 * Keywords: journal, posts, news
 * Viewport Width: 1440
 * Description: Heading and pill left of the centre line, the three latest posts as a ruled list with date and category tag on the right.
 */
?>
<!-- wp:group {"tagName": "section", "className": "nf-band nf-spine nf-journal", "layout": {"type": "default"}, "align": "full"} -->
<section class="wp-block-group alignfull nf-band nf-spine nf-journal"><!-- wp:group {"className": "nf-split", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split"><!-- wp:group {"className": "nf-split__l", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__l"><!-- wp:paragraph {"className": "nf-eyebrow"} -->
<p class="nf-eyebrow"><?php echo wp_kses_post( nami_staffing_t( 'front_journal_label' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( nami_staffing_t( 'front_journal_title' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:buttons {"className": "nf-btns"} -->
<div class="wp-block-buttons nf-btns"><!-- wp:button {"className": "nf-pill"} -->
<div class="wp-block-button nf-pill"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( nami_staffing_t( 'front_journal_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --><!-- wp:group {"className": "nf-split__r", "layout": {"type": "default"}} -->
<div class="wp-block-group nf-split__r"><!-- wp:query {"queryId": 31, "query": {"perPage": 3, "pages": 1, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "className": "nf-topics"} -->
<div class="wp-block-query nf-topics"><!-- wp:post-template -->
<!-- wp:group {"className":"nf-topic","layout":{"type":"default"}} -->
<div class="wp-block-group nf-topic"><!-- wp:group {"className":"nf-topic__meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group nf-topic__meta"><!-- wp:post-date {"format":<?php echo wp_json_encode( nami_staffing_t( 'date_format' ) ); ?>} /-->

<!-- wp:post-terms {"term":"category","className":"nf-topic__tag"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nf-topic__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
