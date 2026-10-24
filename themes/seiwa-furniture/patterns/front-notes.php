<?php
/**
 * Title: Home: notes list
 * Slug: seiwa-furniture/front-notes
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three latest notes as hairline rows: date, outline category pill, title.
 */
$sw_q = '<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"sw-notes sp-reveal sp-reveal--up"} -->
<div class="wp-block-query sw-notes sp-reveal sp-reveal--up"><!-- wp:post-template {"className":"sw-notes__list","layout":{"type":"default"}} -->
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
echo sw_group( 'sw-sec sw-notes-sec', // phpcs:ignore WordPress.Security.EscapeOutput
	sw_group( 'sw-wrap', sw_label( 'notes_label', 'notes_cap' ) . $sw_q . sw_more( 'notes_cta', '/notes/' ) ),
'section' );
