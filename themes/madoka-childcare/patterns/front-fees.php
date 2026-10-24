<?php
/**
 * Title: Home: fees and hours
 * Slug: madoka-childcare/front-fees
 * Categories: madoka-childcare
 * Description: Stripe heading, a paragraph, the opening hours and a full-width price card.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$hours = '<!-- wp:list {"className":"mc-hours"} -->' . "\n" . '<ul class="wp-block-list mc-hours"><li>' . esc_html( $t( 'hr1' ) ) . '</li><li>' . esc_html( $t( 'hr2' ) ) . '</li><li>' . esc_html( $t( 'hr3' ) ) . '</li></ul>' . "\n" . '<!-- /wp:list -->';
$li = '';
for ( $i = 1; $i <= 6; $i++ ) {
	$li .= '<li><span class="mc-prices__n"><strong>' . esc_html( $t( "pr{$i}_n" ) ) . '</strong><small>' . esc_html( $t( "pr{$i}_x" ) ) . '</small></span><span class="mc-prices__p">' . esc_html( $t( "pr{$i}_p" ) ) . '</span></li>';
}
$card = '<!-- wp:list {"className":"mc-prices"} -->' . "\n" . '<ul class="wp-block-list mc-prices">' . $li . '</ul>' . "\n" . '<!-- /wp:list -->'
	. "\n\n" . madoka_childcare_text( 'fees_foot', 'mc-card__foot' );
echo madoka_childcare_group(
	madoka_childcare_group(
		madoka_childcare_group(
			madoka_childcare_group( madoka_childcare_heading( $t( 'fees_h' ), 2, 'mc-stripe--white sp-reveal sp-reveal--wipe' ) . "\n\n" . madoka_childcare_text( 'fees_p' ) . "\n\n" . madoka_childcare_link( $t( 'fees_cta' ), '/fees/' ), 'mc-fees__t' )
			. "\n\n" . madoka_childcare_group( $hours, 'mc-fees__h' ),
			'mc-fees__top'
		)
		. "\n\n" . madoka_childcare_group( $card, 'mc-card mc-fees__card mc-torn-top mc-torn-bottom' ),
		'mc-wrap'
	),
	'mc-sec mc-sec--s mc-fees',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
