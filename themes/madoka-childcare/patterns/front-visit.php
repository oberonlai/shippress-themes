<?php
/**
 * Title: Home: book a visit
 * Slug: madoka-childcare/front-visit
 * Categories: madoka-childcare
 * Description: Band with a torn top, a pebble photograph across it with a white tab, the visit paragraph, four enrolment steps and the badge.
 * Viewport Width: 1440
 */
$t = 'madoka_childcare_t';
?>
<?php
$steps = '';
for ( $i = 1; $i <= 4; $i++ ) {
	$steps .= '<li>' . esc_html( $t( "step{$i}" ) ) . '</li>';
}
$left = madoka_childcare_photo( 'p17.webp', $t( 'alt_p17' ), 'mc-pebble sp-reveal sp-reveal--zoom mc-pop' )
	. "\n\n" . madoka_childcare_para( esc_html( $t( 'visit_tab' ) ), 'mc-tab' )
	. "\n\n" . madoka_childcare_para( '<strong>' . esc_html( $t( 'visit_card_h' ) ) . '</strong><br>' . wp_kses( $t( 'visit_card' ), array( 'br' => array() ) ), 'mc-visit__card' );
$right = madoka_childcare_heading( $t( 'visit_h' ), 2, 'mc-stripe--band mc-stripe--sm sp-reveal sp-reveal--wipe' )
	. "\n\n" . madoka_childcare_text( 'visit_p' )
	. "\n\n" . madoka_childcare_text( 'visit_intro' )
	. "\n\n" . '<!-- wp:list {"ordered":true,"className":"mc-steps"} -->' . "\n" . '<ol class="wp-block-list mc-steps">' . $steps . '</ol>' . "\n" . '<!-- /wp:list -->'
	. "\n\n" . madoka_childcare_link( $t( 'visit_cta' ), '/enrolment/' )
	. "\n\n" . madoka_childcare_badge( 'mc-badge--static' );
echo madoka_childcare_group(
	madoka_childcare_group( madoka_childcare_group( $left, 'mc-visit__l' ) . "\n\n" . madoka_childcare_group( $right, 'mc-visit__r' ), 'mc-wrap mc-visit__grid' ),
	'mc-visit mc-band mc-torn-top mc-torn-bottom',
	'section',
	'"align":"full"'
); // phpcs:ignore WordPress.Security.EscapeOutput
