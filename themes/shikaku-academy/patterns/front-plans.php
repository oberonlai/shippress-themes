<?php
/**
 * Title: Home: plans, single course vs bundle
 * Slug: shikaku-academy/front-plans
 * Categories: shikaku-academy
 * Description: Full-width comparison table of single course, pathway bundle and all-access; stacks into cards on small screens.
 */
$th = function ( $n, $pr, $rec = false ) {
	return '<th scope="col"' . ( $rec ? ' class="is-rec"' : '' ) . '><div class="sa-th"><span class="sa-th__n">' . esc_html( sa_t( $n ) ) . '</span><span class="sa-price">' . esc_html( sa_t( $pr ) ) . '</span></div>' . ( $rec ? '<span class="sa-th__rec">' . esc_html( sa_t( 'pn_rec' ) ) . '</span>' : '' ) . '</th>';
};
$names = array( sa_t( 'pn_n1' ), sa_t( 'pn_n2' ), sa_t( 'pn_n3' ) );
$row   = function ( $label, array $cells ) use ( $names ) {
	$h = '<tr><th scope="row">' . esc_html( $label ) . '</th>';
	foreach ( $cells as $i => $c ) {
		$h .= '<td data-label="' . esc_attr( $names[ $i ] ) . '"' . ( 1 === $i ? ' class="is-rec"' : '' ) . '>' . esc_html( $c ) . '</td>';
	}
	return $h . '</tr>';
};
$yes  = sa_t( 'pn_yes' );
$no   = sa_t( 'pn_no' );
$body = $row( sa_t( 'pn_r1' ), array( sa_t( 'pn_r1a' ), sa_t( 'pn_r1b' ), sa_t( 'pn_r1c' ) ) )
	. $row( sa_t( 'pn_r2' ), array( sa_t( 'pn_r2a' ), sa_t( 'pn_r2b' ), sa_t( 'pn_r2c' ) ) )
	. $row( sa_t( 'pn_r3' ), array( sa_t( 'pn_r3a' ), sa_t( 'pn_r3b' ), sa_t( 'pn_r3c' ) ) )
	. $row( sa_t( 'pn_r4' ), array( sa_t( 'pn_r4a' ), sa_t( 'pn_r4b' ), sa_t( 'pn_r4c' ) ) )
	. $row( sa_t( 'pn_r5' ), array( $yes, $yes, $yes ) )
	. $row( sa_t( 'pn_r6' ), array( $yes, $yes, $yes ) )
	. $row( sa_t( 'pn_r7' ), array( $no, $yes, $yes ) )
	. $row( sa_t( 'pn_r8' ), array( $yes, $yes, $yes ) );
$table = '<div class="sa-plans__wrap"><table class="sa-plans"><thead><tr><th scope="col" class="sa-plans__first">' . esc_html( sa_t( 'pn_feat' ) ) . '</th>'
	. $th( 'pn_n1', 'pn_pr1' ) . $th( 'pn_n2', 'pn_pr2', true ) . $th( 'pn_n3', 'pn_pr3' ) . '</tr></thead><tbody>' . $body . '</tbody></table></div>';
echo sa_g( 'sa-sec sa-planssec',
	sa_g( 'sa-wrap',
		sa_bracket( 'pn_label' ) . sa_title( 'pn_title' )
		. sa_html( $table )
		. sa_g( 'sa-plans__foot', sa_p( 'sa-plans__note', esc_html( sa_t( 'pn_note' ) ) ) . sa_btns( 'sa-plans__cta', array( array( sa_t( 'pn_cta' ), '/plans/' ) ) ) )
	),
	'section'
);
