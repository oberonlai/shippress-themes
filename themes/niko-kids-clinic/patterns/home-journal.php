<?php
/**
 * Title: Home: latest notes
 * Slug: niko-kids-clinic/home-journal
 * Categories: niko-kids-clinic
 * Keywords: paediatric clinic, children, doctor
 * Viewport Width: 1440
 * Description: The three latest notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "nk-section nk-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull nk-section nk-home-journal"><!-- wp:paragraph {"className": "nk-eyebrow"} -->
<p class="nk-eyebrow"><?php echo esc_html( niko_kids_clinic_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "nk-sec__title"} -->
<h2 class="wp-block-heading nk-sec__title"><?php echo esc_html( niko_kids_clinic_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "nk-notes"} -->
<div class="wp-block-query alignwide nk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"nk-note__img"} /-->

<!-- wp:group {"className":"nk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group nk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"nk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"nk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( niko_kids_clinic_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "nk-more"} -->
<div class="wp-block-buttons nk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo esc_html( niko_kids_clinic_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
