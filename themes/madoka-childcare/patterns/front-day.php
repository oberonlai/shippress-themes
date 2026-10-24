<?php
/**
 * Title: Home: the care day
 * Slug: madoka-childcare/front-day
 * Categories: madoka-childcare
 * Description: Band with a torn top edge, an egg-shaped photograph across it with a white tab, three time rows with time blobs and the whole-day card.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$rows = array(
	array( 1, 'tm1_t', 'p06.webp', 'alt_p06', '' ),
	array( 2, 'tm3_t', 'p07.webp', 'alt_p07', ' mc-row--flip' ),
	array( 3, 'tm8_t', 'p09.webp', 'alt_p09', '' ),
);
$out = '';
foreach ( $rows as $r ) {
	list( $n, $time, $file, $alt, $flip ) = $r;
	$ph  = madoka_childcare_para( esc_html( $t( $time ) ), 'mc-time sp-reveal sp-reveal--zoom mc-pop' )
		. "\n\n" . madoka_childcare_photo( $file, $t( $alt ), 'mc-row__img' );
	$txt = madoka_childcare_heading( $t( "row{$n}_h" ), 3, 'mc-stripe--band' )
		. "\n\n" . madoka_childcare_text( "row{$n}_p1" ) . "\n\n" . madoka_childcare_text( "row{$n}_p2" );
	$out .= madoka_childcare_group( madoka_childcare_group( $ph, 'mc-row__ph' ) . "\n\n" . madoka_childcare_group( $txt, 'mc-row__t' ), 'mc-row' . $flip ) . "\n\n";
}
// Row 1 shows 07:30, row 2 09:30 and row 3 17:00 (the fixed home rows).
$list = '';
for ( $i = 1; $i <= 9; $i++ ) {
	$list .= '<li><span class="mc-tl__t">' . esc_html( $t( "tm{$i}_t" ) ) . '</span><span class="mc-tl__x">' . esc_html( $t( "tm{$i}_x" ) ) . '</span></li>';
}
$card = madoka_childcare_heading( $t( 'whole_h' ), 3, 'mc-card__h' )
	. "\n\n" . '<!-- wp:list {"className":"mc-tl"} -->' . "\n" . '<ul class="wp-block-list mc-tl">' . $list . '</ul>' . "\n" . '<!-- /wp:list -->'
	. "\n\n" . madoka_childcare_text( 'whole_foot', 'mc-card__foot' )
	. "\n\n" . madoka_childcare_link( $t( 'day_cta' ), '/the-care-day/' );
$top = madoka_childcare_photo( 'p05.webp', $t( 'alt_p05' ), 'mc-egg sp-reveal sp-reveal--zoom mc-pop' )
	. "\n\n" . madoka_childcare_para( esc_html( $t( 'day_tab' ) ), 'mc-tab' );
echo madoka_childcare_group(
	madoka_childcare_group(
		madoka_childcare_group( $top, 'mc-day__top' )
		. "\n\n" . madoka_childcare_text( 'day_intro', 'mc-day__intro' )
		. "\n\n" . $out
		. madoka_childcare_group( $card, 'mc-card mc-torn-top mc-torn-bottom' ),
		'mc-wrap'
	),
	'mc-day mc-band mc-torn-top',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
