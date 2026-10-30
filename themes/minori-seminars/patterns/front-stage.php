<?php
/**
 * Title: Home: stage
 * Slug: minori-seminars/front-stage
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: Key visual: photo inset 35 px from both edges with the word-by-word statement and the white notch card with the next three dates.
 */
?>
<?php
$ms_words  = explode( ' ', minori_seminars_t( 'hero_words' ) );
$ms_join   = in_array( minori_seminars_lang(), array( 'zh-TW', 'ja' ), true ) ? '' : ' ';
$ms_h1     = '';
$ms_i      = 0;
foreach ( $ms_words as $ms_w ) {
	if ( '|' === $ms_w ) {
		$ms_h1 .= '<br>';
		continue;
	}
	$ms_h1 .= '<span class="ms-w" style="--i:' . (int) $ms_i . '">' . esc_html( $ms_w ) . '</span>' . $ms_join;
	++$ms_i;
}
$ms_dates = array(
	array( 'Thu 21 Jan 2027', 'First-Time Manager Day' ),
	array( 'Thu 4 Feb 2027', 'Leading Through Change' ),
	array( 'Thu 18 Feb 2027', "The Owner's Day" ),
);
$ms_lines = '';
foreach ( $ms_dates as $ms_d ) {
	$ms_lines .= '<a href="/enrol/">' . esc_html( $ms_d[0] . ' · ' . $ms_d[1] ) . '</a>';
}
$ms_svg = '<svg viewBox="0 0 16 10" width="16" height="10" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M0 5h14M10 1l4 4-4 4"/></svg>';
?>
<!-- wp:group {"align":"full","anchor":"top","className":"ms-stagewrap","layout":{"type":"default"}} -->
<div id="top" class="wp-block-group alignfull ms-stagewrap"><!-- wp:group {"className":"ms-stage sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ms-stage sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","width":1408,"height":704,"className":"ms-stage__photo"} -->
<figure class="wp-block-image size-full ms-stage__photo"><img src="<?php echo minori_seminars_img( 'hero-seminar-room.webp' ); ?>" alt="<?php echo esc_attr( minori_seminars_t( 'ab02fd102' ) ); ?>" width="1408" height="704"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<h1 class="ms-statement"><?php echo $ms_h1; // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
<!-- /wp:html -->

<!-- wp:html -->
<div class="ms-notch"><p class="ms-notch__label"><?php echo wp_kses_post( minori_seminars_t( 'kaf947312' ) ); ?></p><div class="ms-notch__strip" id="ms-notch-strip"><?php echo $ms_lines; // phpcs:ignore WordPress.Security.EscapeOutput ?></div><div class="ms-arrows"><button type="button" class="ms-arrow" data-ms-strip="#ms-notch-strip" data-dir="prev" aria-label="<?php echo esc_attr( minori_seminars_t( 'a4bb02fd0' ) ); ?>"><?php echo $ms_svg; // phpcs:ignore WordPress.Security.EscapeOutput ?></button><button type="button" class="ms-arrow" data-ms-strip="#ms-notch-strip" data-dir="next" aria-label="<?php echo esc_attr( minori_seminars_t( 'a94da86f5' ) ); ?>"><?php echo $ms_svg; // phpcs:ignore WordPress.Security.EscapeOutput ?></button></div></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
