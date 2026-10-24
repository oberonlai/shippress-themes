<?php
/**
 * Title: Home: notes from the rooms
 * Slug: madoka-childcare/front-notes
 * Categories: madoka-childcare
 * Description: Stripe heading and the three latest posts in a row.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$query = '<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"mc-notes__q"} -->' . "\n"
	. '<div class="wp-block-query mc-notes__q"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->' . "\n"
	. '<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","scale":"cover","className":"mc-note__img"} /-->' . "\n\n"
	. '<!-- wp:post-date {"className":"mc-meta"} /-->' . "\n\n"
	. '<!-- wp:post-title {"isLink":true,"level":3,"className":"mc-note__h"} /-->' . "\n"
	. '<!-- /wp:post-template -->' . "\n\n"
	. '<!-- wp:query-no-results -->' . "\n" . madoka_childcare_text( 'nothing' ) . "\n" . '<!-- /wp:query-no-results --></div>' . "\n" . '<!-- /wp:query -->';
echo madoka_childcare_group(
	madoka_childcare_group(
		madoka_childcare_heading( $t( 'notes_h' ), 2, 'mc-stripe--white sp-reveal sp-reveal--wipe' )
		. "\n\n" . madoka_childcare_text( 'notes_p', 'mc-notes__p' )
		. "\n\n" . $query
		. "\n\n" . madoka_childcare_link( $t( 'notes_cta' ), '/notes/' ),
		'mc-wrap'
	),
	'mc-sec mc-sec--n mc-notes',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
