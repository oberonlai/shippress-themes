<?php
/**
 * Title: Home: spring term dates
 * Slug: minori-seminars/front-dates
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: The NEWS construction: a vertical DATES word beside a gradient block, with a white bordered panel of six dated rows and two buttons.
 */
?>
<?php
$ms_dates = array(
	array( 'Thu 21 January 2027', 'First-Time Manager Day', 'Marit Coenen' ),
	array( 'Thu 4 February 2027', 'Leading Through Change', 'Samuel Adeyemi' ),
	array( 'Thu 18 February 2027', "The Owner's Day", 'Claire Dubois' ),
	array( 'Thu 11 March 2027', 'First-Time Manager Day', 'Marit Coenen' ),
	array( 'Thu 25 March 2027', 'Leading Through Change', 'Samuel Adeyemi' ),
	array( 'Thu 8 April 2027', "The Owner's Day", 'Claire Dubois' ),
);
$ms_rows = '';
foreach ( $ms_dates as $ms_d ) {
	$ms_rows .= '<!-- wp:group {"className":"ms-drow","layout":{"type":"default"}} -->' . "\n"
		. '<div class="wp-block-group ms-drow">' . minori_seminars_p( esc_html( $ms_d[0] ), 'ms-drow__date' ) . "\n\n"
		. minori_seminars_p( esc_html( $ms_d[1] . ': ' . $ms_d[2] ), 'ms-drow__title' ) . '</div>' . "\n<!-- /wp:group -->\n\n";
}
?>
<!-- wp:group {"align":"full","anchor":"dates","className":"ms-sec ms-dates","layout":{"type":"default"}} -->
<div id="dates" class="wp-block-group alignfull ms-sec ms-dates"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'SPRING TERM' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:heading {"level":2,"className":"ms-h2 ms-h2--s"} -->
<h2 class="wp-block-heading ms-h2 ms-h2--s"><?php echo wp_kses_post( minori_seminars_t( 'kc0af6d43' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ms-lead"} -->
<p class="ms-lead"><?php echo wp_kses_post( minori_seminars_t( 'k9b67b819' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-news","layout":{"type":"default"}} -->
<div class="wp-block-group ms-news"><!-- wp:paragraph {"className":"ms-vword"} -->
<p class="ms-vword"><?php echo wp_kses_post( minori_seminars_t( 'k33d59b1b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ms-news__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ms-news__panel"><?php echo $ms_rows; // phpcs:ignore WordPress.Security.EscapeOutput ?><!-- wp:group {"className":"ms-news__btns","layout":{"type":"default"}} -->
<div class="wp-block-group ms-news__btns"><?php echo minori_seminars_btn( 'Reserve a seat', '/enrol/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<?php echo minori_seminars_btn( 'Join the waitlist', '/newsletter/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
