<?php
/**
 * Title: Template: archive
 * Slug: seiwa-furniture/tpl-archive
 * Categories: seiwa-furniture
 * Inserter: no
 * Viewport Width: 1440
 * Description: Notes list for the posts page, archives and search.
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
echo sw_group( "sw-main", sw_group( "sw-sec sw-pagehead", sw_group( 'sw-wrap', '<!-- wp:query-title {"type":"archive","level":1,"className":"sw-h1"} /-->' . "\n\n" . $sw_q ), "section" ), "main" ); // phpcs:ignore WordPress.Security.EscapeOutput
