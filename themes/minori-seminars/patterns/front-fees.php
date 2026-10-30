<?php
/**
 * Title: Home: fees
 * Slug: minori-seminars/front-fees
 * Categories: minori-seminars
 * Keywords: seminar, management, landing
 * Viewport Width: 1440
 * Description: Pale band with the six-row fee table at full container width and a note on VAT.
 */
?>
<?php
$ms_fees = array(
	array( 'Open seminar day', 'One seat, lunch and seminar notes included', '€640' ),
	array( 'Table of four', '4 seats from one organisation at one table, same date', '€2,240' ),
	array( 'Follow-up call', '45 min with your facilitator, within 30 days', '€150' ),
	array( 'Seminar notes', 'Printed workbook, yours to keep', 'Included' ),
	array( 'In-house seminar', 'Any of the three, up to 16 people, at your premises within 100 km of Rotterdam', '€6,800' ),
	array( 'Waitlist and early access', "First notice of the next term's dates", 'Free' ),
);
$ms_body = '';
foreach ( $ms_fees as $ms_f ) {
	$ms_body .= '<tr><td class="ms-fee__item">' . esc_html( $ms_f[0] ) . '</td><td class="ms-fee__detail">' . esc_html( $ms_f[1] ) . '</td><td class="ms-fee__price">' . esc_html( $ms_f[2] ) . '</td></tr>';
}
?>
<!-- wp:group {"align":"full","anchor":"fees","className":"ms-sec ms-sec--half ms-fees","layout":{"type":"default"}} -->
<div id="fees" class="wp-block-group alignfull ms-sec ms-sec--half ms-fees"><!-- wp:group {"className":"ms-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ms-wrap"><?php echo minori_seminars_label( 'FEES' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>

<!-- wp:html -->
<figure class="wp-block-table ms-feetable"><table><thead><tr><th scope="col"><?php echo wp_kses_post( minori_seminars_t( 'k7d74f3b9' ) ); ?></th><th scope="col"><?php echo wp_kses_post( minori_seminars_t( 'ka254c25a' ) ); ?></th><th scope="col"><?php echo wp_kses_post( minori_seminars_t( 'k3601146c' ) ); ?></th></tr></thead><tbody><?php echo $ms_body; // phpcs:ignore WordPress.Security.EscapeOutput ?></tbody></table></figure>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"ms-note"} -->
<p class="ms-note"><?php echo wp_kses_post( minori_seminars_t( 'k02d4156c' ) ); ?></p>
<!-- /wp:paragraph -->

<?php echo minori_seminars_btn( 'Reserve a seat', '/enrol/' ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
