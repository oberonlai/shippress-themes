<?php
/**
 * Title: Notes index
 * Slug: seiwa-furniture/tpl-notes
 * Categories: seiwa-furniture
 * Inserter: no
 * Viewport Width: 1440
 * Description: Inner page head (headline, staggered photo pair over flat panels) followed by the dated notes list as hairline rows and two short paragraphs.
 */
$sw_q = '<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","inherit":true},"className":"sw-notes"} -->
<div class="wp-block-query sw-notes"><!-- wp:post-template {"className":"sw-notes__list","layout":{"type":"default"}} -->
<!-- wp:group {"className":"sw-note","layout":{"type":"default"}} -->
<div class="wp-block-group sw-note"><!-- wp:post-date {"format":"j F Y","className":"sw-note__d"} /-->

<!-- wp:post-terms {"term":"category","className":"sw-note__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sw-note__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>' . sw_t( 'no_posts' ) . '</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

';
$sw_head = sw_group( 'sw-ihead',
	sw_group( 'sw-ihead__shape sw-ihead__shape--trap', '' ) .
	sw_group( 'sw-ihead__shape sw-ihead__shape--pill', '' ) .
	sw_group( 'sw-ihead__text', sw_h( 1, 'sw-ih1', sw_t( 'notes_h1' ) ) . sw_p( 'sw-ihead__lead', sw_t( 'notes_lead' ) ) ) .
	sw_group( 'sp-parallax sw-ihead__wide', sw_img( 'tile-castor-fit.webp', sw_ta( 'alt_P12' ) ) ) .
	sw_group( 'sp-parallax sw-ihead__tall', sw_img( 'kv-swatch-hand.webp', sw_ta( 'alt_P2' ) ) ),
'section' );
echo sw_group( 'sw-main', // phpcs:ignore WordPress.Security.EscapeOutput
	$sw_head .
	sw_group( 'sw-sec', sw_group( 'sw-wrap', $sw_q ), 'section' ) .
	sw_group( 'sw-sec sw-band sw-narr', sw_group( 'sw-wrap', sw_group( 'sw-prose', sw_h( 2, 'sw-ph2', sw_t( 'notes_h2a' ) ) . sw_p( 'sw-prose__p', sw_t( 'notes_p1' ) ) . sw_h( 2, 'sw-ph2', sw_t( 'notes_h2b' ) ) . sw_p( 'sw-prose__p', sw_t( 'notes_p2' ) ) ) ), 'section' ),
'main' );
